<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;

class DashboarAdminSuperdController extends Controller
{
    public function index_admin_super()
    {
        return view('components.super-admin.dashboard', [
            'permintaan_ditolak' => PermohonanInformasiPublik::where('status', 'Mohon Maaf Permintaan Anda Di Tolak')->count(),
            'permintaan_diterima' => PermohonanInformasiPublik::where('status', 'Telah DiTerima')->count(),
            'permintaan_menunggu' => PermohonanInformasiPublik::where('status', 'Menunggu Verifikasi')->count(),
        ]);
    }
}
