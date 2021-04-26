<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteIndexController extends Controller
{
    public function index(Request $request)
    {
        $getUrl = \Request::url();
        $result = explode('/', $getUrl);

        if (isset($result[3]) && $result[3] === "admin") {
            return view('admin.index');
        }

        return view('site.index');
    }
}
