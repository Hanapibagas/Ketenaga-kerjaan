<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('components.pages.beranda');
    }

    public function profile()
    {
        return view('components.pages.profile');
    }

    public function ppid()
    {
        return view('components.pages.ppid');
    }
}
