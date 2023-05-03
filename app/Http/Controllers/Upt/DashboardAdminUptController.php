<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;

class DashboardAdminUptController extends Controller
{
    public function dashboard_upt()
    {
        return view('components.admin-upt.dashboard', [
            'permintaan_ditolak' => PermohonanInformasiPublik::where('status', 'Mohon Maaf Permintaan Anda Di Tolak')->count(),
            'permintaan_diterima' => PermohonanInformasiPublik::where('status', 'Telah DiTerima')->count(),
            'permintaan_menunggu' => PermohonanInformasiPublik::where('status', 'Menunggu Verifikasi')->count(),
        ]);
    }
}
