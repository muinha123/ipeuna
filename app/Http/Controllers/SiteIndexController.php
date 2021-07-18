<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteIndexController extends Controller
{
    public function index(Request $request)
    {
        $getUrl = \Request::url();
        $result = explode('/', $getUrl);

        if (isset($result[3]) && $result[3] === "admin") {
            if (Auth::check()) {
                return view('admin.index');
            }

            return view('site.index');
        }

        return view('site.index');
    }
}
