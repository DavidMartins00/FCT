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

    public function back()
    {
        return view('material-dashboard-master/examples/dashboard');
    }

    public function icon()
    {
        return view('material-dashboard-master/examples/icons');
    }

    public function map()
    {
        return view('material-dashboard-master/examples/map');
    }

    public function maps()
    {
        return view('material-dashboard-master/examples/maps');
    }

    public function notification()
    {
        return view('material-dashboard-master/examples/notifications');
    }

    public function rt()
    {
        return view('material-dashboard-master/examples/rtl');
    }

    public function tables()
    {
        return view('material-dashboard-master/examples/tables');
    }

    public function typo()
    {
        return view('material-dashboard-master/examples/typography');
    }

    public function upgrade()
    {
        return view('material-dashboard-master/examples/upgrade');
    }

    public function dash()
    {
        return view('material-dashboard-master/examples/user');
    }
}
