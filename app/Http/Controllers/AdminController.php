<?php

namespace App\Http\Controllers;

use App\Activity;
use App\EventRegistration;
use App\Resource;
use App\Role;
use App\Support;
use App\User;
use function array_keys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Storage;
use Zizaco\Entrust\Entrust;

class AdminController extends Controller
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

    public function logout()
    {
        Auth::logout();
        return redirect("/");
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

    function home()
    {
        return redirect('/admin/resources');
        //return view('admin.home');
    }


    function editSupportForm($id, Request $request)
    {
        $support = Support::findOrFail($id);

        return view("admin.support-form", ["card" => $support]);
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

    function activity(Request $request)
    {
        $title = "Activity";
        if ($request->input("resource_id")) {

            $resourceId = $request->input("resource_id");

            $resource = Resource::findOrFail($resourceId);

            $title = $resource->title . " Activity";


            $activity = Activity::orderBy("created_at", "desc")
                ->where("resource_id", $resourceId)
                ->with("user")
                ->with("resource")
                ->get();


        }
        elseif ($request->input("user_id") ){
            $userId = $request->input("user_id");

            $user = User::findOrFail($userId);

            $title = "Activity for " . $user->name;

            $activity = Activity::orderBy("created_at", "desc")
                ->where("user_id", $userId)
                ->with("user")
                ->with("resource")
                ->get();
        }
        else {
            $activity = Activity::orderBy("created_at", "desc")
                ->with("user")
                ->with("resource")
                ->get();
        }

        return view('admin.activity', [
            'activity' => $activity,
            "title" => $title
        ]);
    }

    function users()
    {
        $users = User::all()->map(function ($user) {
            $user->role = $user->hasRole('admin') ? 'admin' : 'manager';

            return $user;
        });

        return view('admin.users', ['users' => $users->toArray()]);
    }

    public function resources()
    {
        $resources = Resource::orderBy("category")->get();
        return view('admin.resources', ["resources" => $resources]);
    }

    public function logResourceAccess(Request $request)
    {
        $activity = new Activity();

        $activity->user_id     = Auth::user()->id;
        $activity->resource_id = $request->input("resource_id");
        $activity->action      = "accessed resource";
        $activity->save();
    }

    public function saveResource(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('public/thumbnails');

        $id = $request->input("id");

        if ($id > 0) {
            $resource = Resource::findOrFail($id);
        } else {
            $resource = new Resource();
        }

        if ($request->input("type") === "file") {
            $resource->url = "n/a";
            $file          = $request->file('file')->store('public/resources');
        } else {
            $file          = "n/a";
            $resource->url = $request->input("url");
        }

        $resource->title     = $request->input('title');
        $resource->type      = $request->input("type");
        $resource->category  = $request->input("category");
        $resource->thumbnail = $thumbnail;
        $resource->resource  = $file;


        $resource->save();


        return redirect("/admin/resources");
        //dd($request->all());
    }

    public function deleteResource($id)
    {

        /** @var Resource $resource */
        $resource = Resource::findOrFail($id);

        Storage::delete($resource->resource);
        Storage::delete($resource->thumbnail);
        $resource->delete();
        return redirect("/admin/resources");
    }

    public function resource($id)
    {
        if ($id === 'new') {
            $id = -1;
        }


        return view('admin.resource', [
            "id" => $id
        ]);
    }

    function login($id)
    {
        $user = User::where('id', $id)->first();
        if (!empty($user)) {
            Auth::login($user);
        }

        return redirect('/admin');

    }

    function deleteUser($id){
        /** @var User $toDelete */
        $toDelete = User::findOrFail($id);
        //first user created is protected from deletion
        $protected = User::orderBy("id", "asc")->first();

        if($toDelete->id === $protected->id){
            die("Cannot delete the original user");
        }

        $toDelete->delete();
        return redirect("/admin/users");
    }

    function addUser(Request $request)
    {
        $user           = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $roleName = $request->role;
        $role     = Role::findName($roleName);
        $user->attachRole($role);

        return redirect('admin/users');

    }

}
