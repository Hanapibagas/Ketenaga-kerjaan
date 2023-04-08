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

    public function index_dataset()
    {
        return view('components.pages.dataset');
    }

    public function permintaan_data_guest()
    {
        return view('components.pages.dataset.permintaan-data-guest');
    }
    public function permintaan_data_auth()
    {
        return view('components.pages.dataset.permintaan-data-auth');
    }

    public function unduh_data()
    {
        return view('components.pages.dataset.unduh-data');
    }

    public function data_integrasi()
    {
        return view('components.pages.dataset.data-integrasi');
    }
}
