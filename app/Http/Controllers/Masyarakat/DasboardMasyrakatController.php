<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;

class DasboardMasyrakatController extends Controller
{
    public function dashboard_masyarakat()
    {
        return view('components.admin-masyarakat.dashboard', [
            'permintaan_ditolak' => PermohonanInformasiPublik::where('status', 'Mohon Maaf Permintaan Anda Di Tolak')->count(),
            'permintaan_diterima' => PermohonanInformasiPublik::where('status', 'Telah DiTerima')->count(),
            'permintaan_menunggu' => PermohonanInformasiPublik::where('status', 'Menunggu Verifikasi')->count(),
        ]);
    }
}
