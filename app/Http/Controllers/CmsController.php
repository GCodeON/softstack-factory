<?php

namespace App\Http\Controllers;

use Cswiley\Cms\Cms;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    private $cms;

    public function __construct(Cms $cms)
    {
        $this->cms = $cms;
    }

    public function show($name)
    {
        $data = $this->cms->get($name);

        return response()->json($data);
    }
}
