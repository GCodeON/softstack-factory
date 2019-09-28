<?php

namespace App\Http\Controllers;

use App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Zizaco\Entrust\Entrust;

class SupportController extends Controller
{
    private $user;

    public function __construct(Request $request)
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();
            $this->setMenu($request, $this->user);

            return $next($request);
        });
    }

    private function setMenu($request, $user)
    {
        // @todo menu urls
        $menu = [
            [
                'name' => 'Resources',
                'url' => '/admin/resources',
            ],
            [
                'name' => 'Support',
                'url' => '/admin/support',
                'role' => 'admin'
            ],
            [
                'name' => 'Activity',
                'url' => '/admin/activity',
                'role' => 'admin'
            ],
            [
                'name' => 'Users',
                'url' => '/admin/users',
                'role' => 'admin'
            ],
            [
                'name' => 'Logout',
                'url' => '/admin/logout',
            ],
        ];

        $menu = array_filter($menu, function ($menu) use ($user) {
            if ($user->hasRole('admin')) {
                return true;
            }

            return empty($menu['role']) || $menu['role'] === 'manager';

        });

        $url     = $request->segment(1);
        $pattern = !empty($url) ? "/$url/" : false;
        $menu    = array_map(function ($n) use ($pattern) {
            $n['active'] = false;
            if ($pattern !== false && preg_match($pattern, $n['url'])) {
                $n['active'] = true;
            }

            return $n;
        }, $menu);

        view()->share('userAccount', $user->toArray());
        view()->share('menu', $menu);
    }


    function saveSupport($id, Request $request)
    {
        /** @var Support $support */
        $support = Support::findOrFail($id);

        $support->fullname = $request->input("fullname");
        $support->message = $request->input("message");
        $support->zip = $request->input("zip");
        $support->location = $request->input("location");
        $support->image = $request->input("image");

        $support->save();

        return redirect("/admin/support");
    }

    function support(Request $request)
    {
        $type     = $request->input("type", "pending");
        $supports = Support::orderBy("created_at", "asc");
        if ($type === 'pending') {
            $supports->whereNull("deleted_at")->whereNull("published_at");
        }
        if ($type === "published") {
            $supports->whereNotNull("published_at");
        }
        if ($type === "deleted") {
            $supports->whereNotNull("deleted_at");
        }


        $support = $supports->get();
        return view('admin.support', [
            'support' => $support,
            'type' => $type
        ]);
    }

    function editSupport(Request $request)
    {
        $id     = $request->input("id");
        $action = $request->input("action");
        $from   = $request->input("from");

        /** @var Support $support */
        $support = Support::findOrFail($id);

        if ($action === "delete") {
            $support->deleted_at   = sqlNow();
            $support->published_at = null;
        }
        if ($action === "approve") {
            $support->published_at = sqlNow();
            $support->deleted_at   = null;
        }

        $support->save();

        return redirect("/admin/support?type=$from");

    }


    function editSupportForm($id, Request $request)
    {
        $support = Support::findOrFail($id);

        return view("admin.support-form", ["card" => $support]);
    }

}
