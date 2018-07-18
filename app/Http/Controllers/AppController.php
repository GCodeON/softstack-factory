<?php

namespace App\Http\Controllers;


use App\Contact;
use App\DataLoader;
use App\Support;
use Cswiley\Cms\Cms;
use Illuminate\Http\Request;
use Html;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class AppController extends Controller
{
    private $cms;
    private $request;

    public function __construct(Cms $cms, Request $request)
    {
        $this->cms     = $cms;
        $this->request = $request;
        $this->setMenu();
//        View::share('prototype', $this->prototype);
        View::share('globals', $this->cms->get('globals'));
    }

    private function setMenu()
    {
        $menu = [
            [
                'name' => 'About',
                'url'  => '/about',
            ],
            [
                'name' => 'Program',
                'url'  => '/program',
            ],
            [
                'name' => 'Apply',
                'url'  => '/apply',
            ],
            [
                'name' => 'Resources',
                'url' => '/resources',
            ]
        ];

        $url     = $this->request->segment(1);
        $pattern = !empty($url) ? "/$url/" : false;
        $menu    = array_map(function ($n) use ($pattern) {
            $n['active'] = false;
            if ($pattern !== false && preg_match($pattern, $n['url'])) {
                $n['active'] = true;
            }

            return $n;
        }, $menu);

        view()->share('menu', $menu);
    }

    function home()
    {
        $data = $this->cms->get('home');

        if (!empty($data["data"])) {
            foreach ($data["data"] as $key => $class) {
                $data[$key] = DataLoader::fetch($class);
            }
        }

        return view('home', $data);
    }


    function page(Request $request)
    {
        $page         = $request->segment(1);
        $data         = $this->cms->get($page);
        $data['page'] = $page;

        if (!empty($data["data"])) {
            foreach ($data["data"] as $key => $class) {
                $data[$key] = DataLoader::fetch($class);
            }
        }

        if (View::exists($page)) {
            return view($page, $data);
        }

        abort(404);
    }

    function addContact()
    {

        $formData   = $this->request->input('formData');
        $newContact = new Contact();

        $blacklist = [
            'start_time',
            'end_time',
            'date'
        ];

        $eventData = array_filter($formData, function ($n, $key) use ($blacklist) {
            return !in_array($key, $blacklist);
        }, ARRAY_FILTER_USE_BOTH);


        $newContact->fill($eventData);
        $success = $newContact->save();

        return response()->json([
            'ok' => $success,
            'type' => 'newContact',
            'data' => $newContact->toArray()
        ]);
    }

    function addSupport()
    {
        $newSupport           = new Support;
        $newSupport->fullname = $this->request->input('fullname');
        $newSupport->message  = $this->request->input('message');
        $newSupport->location = $this->request->input('city');
        $success              = $newSupport->save();

        return response()->json([
            'ok' => $success,
            'support' => $newSupport->toArray()
        ]);
    }

//    function getSupports() {
//        $supports = Support::all();
//
//        return response()->json([
//            'ok'   => '200',
//            'type' => 'Supports',
//            'data' => $supports->toArray()
//        ]);
//
//    }
}
