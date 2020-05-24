<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function admin()
    {
        return view('site/admin');
    }

    public function ger()
    {
        return view('site/ger');
    }

    public function func()
    {
        return view('site/func');
    }

    public function index()
    {
        return view('site/index');
    }
}
