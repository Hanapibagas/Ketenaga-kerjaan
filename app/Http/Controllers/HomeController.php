<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\DataSet;
use App\Models\DataStaf;
use App\Models\Infografis;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('components.pages.beranda');
    }

    public function profile()
    {
        $profiles = DataStaf::all();
        return view('components.pages.profile', compact('profiles'));
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
        $datset = DataSet::all();
        return view('components.pages.dataset.unduh-data', compact('datset'));
    }

    public function details_dataset($slug)
    {
        $datset = DataSet::paginate(3);
        $details = DataSet::where('slug', $slug)->firstOrFail();
        return view('components.pages.dataset.details-undu-data', compact('datset', 'details'));
    }

    public function data_integrasi()
    {
        return view('components.pages.dataset.data-integrasi');
    }

    public function index_infografis()
    {
        $infografis = Infografis::all();
        return view('components.pages.infografis.infrografis', compact('infografis'));
    }
    public function infografis_details($slug)
    {
        $infografis = Infografis::where('slug', $slug)->firstOrFail();
        return view('components.pages.infografis.details-info', compact('infografis'));
    }

    public function index_berita()
    {
        $berita = Berita::all();
        return view('components.pages.berita.index', compact('berita'));
    }
    public function details_berita($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('components.pages.berita.details-berita', compact('berita'));
    }

    public function index_informasi_public()
    {
        return view('components.pages.informasai-public');
    }

    public function index_publikasi()
    {
        $publlikasi = Publikasi::all();
        return view('components.pages.publikasi.index-publikasi', compact('publlikasi'));
    }
    public function details_pulikasi($slug)
    {
        $publlikasi = Publikasi::where('slug', $slug)->firstOrFail();
        return view('components.pages.publikasi.details-publikasi', compact('publlikasi'));
    }

    public function pengumuman()
    {
        return view('components.pages.pengumuman');
    }

    public function simpas()
    {
        return view('components.pages.layanan.simpas');
    }

    public function permohonan_publik()
    {
        return view('components.pages.layanan.permohonan-publik');
    }

    public function keberatan_publik()
    {
        return view('components.pages.layanan.pengajuan-publik');
    }

    public function keran_sulsel()
    {
        return view('components.pages.layanan.keran-sulsel');
    }

    public function lapor()
    {
        return view('components.pages.layanan.lapor');
    }
}
