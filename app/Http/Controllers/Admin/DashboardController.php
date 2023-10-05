<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\DataSet;
use App\Models\DataStaf;
use App\Models\Infografis;
use App\Models\Pengumuman;
use App\Models\PermintaanData;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index_dashboard()
    {
        return view('components.dashboard.dashboard', [
            'jumlahdataberita' => PermintaanData::count(),
            'jumlahdatapublikasi' => Publikasi::count(),
            'jumlahdatapengumuman' => Pengumuman::count(),
            'jumlahdatapegawai' => DataStaf::count(),
            'jumlahdatainfografis' => DataSet::count()
        ]);
    }
}
