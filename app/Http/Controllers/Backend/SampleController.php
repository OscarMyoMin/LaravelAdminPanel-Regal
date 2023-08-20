<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function dashboard()
    {
        return view('backend.sample.dashboard');
    }

    public function chart()
    {
        return view('backend.sample.chart');
    }
    public function table()
    {
        return view('backend.sample.table');
    }

    public function icon()
    {
        return view('backend.sample.icon');
    }

    public function button()
    {
        return view('backend.sample.button');
    }

    public function typography()
    {
        return view('backend.sample.typography');
    }

    public function forms()
    {
        return view('backend.sample.forms');
    }

    public function login()
    {
        return view('backend.sample.auth.login');
    }

    public function login2()
    {
        return view('backend.sample.auth.login2');
    }
}
