<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteIndexController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
}
