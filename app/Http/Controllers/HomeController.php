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

    public function index_infografis()
    {
        return view('components.pages.infografis.infrografis');
    }
    public function infografis_details($slug)
    {
        return view('components.pages.infografis.details-info');
    }

    public function index_berita()
    {
        return view('components.pages.berita.index');
    }
    public function details_berita($slug)
    {
        return view('components.pages.berita.details-berita');
    }

    public function index_informasi_public()
    {
        return view('components.pages.informasai-public');
    }

    public function index_publikasi()
    {
        return view('components.pages.publikasi.index-publikasi');
    }
    public function details_pulikasi($slug)
    {
        return view('components.pages.publikasi.details-publikasi');
    }

    public function layanan()
    {
        return view('components.pages.layanan');
    }

    public function pengumuman()
    {
        return view('components.pages.pengumuman');
    }
}
