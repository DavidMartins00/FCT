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

    public function menu()
    {
        return view('site/menu');
    }

    public function func()
    {
        return view('site/func');
    }

    public function index()
    {
        return view('site/index');
    }


    public function back()
    {
        return view('backoffice/mainpage');
    }

    public function profile()
    {
        return view('backoffice/userprofile');
    }

    public function tables()
    {
        return view('backoffice/tables');
    }

    public function publicidade()
    {
        return view('backoffice/anuncios');
    }
}
