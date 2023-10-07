<?php

namespace App\Http\Controllers\AdminSuper;

use App\Exports\LaporanExport;
use App\Http\Controllers\Controller;
use App\Models\DataSet;
use App\Models\Iku;
use App\Models\Lppd;
use App\Models\PengukuranKinerja;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanAdminSuperController extends Controller
{
    public function index_laporan_admin_super()
    {
        $dataset = DataSet::orderBy('created_at', 'desc')->get();
        $iku = Iku::orderBy('created_at', 'desc')->get();
        $lppd = Lppd::orderBy('created_at', 'desc')->get();
        $pengukur = PengukuranKinerja::orderBy('created_at', 'desc')->get();
        return view('components.super-admin.laporan.index', compact('dataset', 'iku', 'lppd', 'pengukur'));
    }

    public function getDetails($id)
    {
        $dataset = Dataset::find($id);
        $iku = Iku::find($id);
        $lppd = Lppd::find($id);
        $pengukuran = PengukuranKinerja::find($id);

        return view('components.super-admin.laporan.details', compact('dataset', 'iku', 'lppd', 'pengukuran'));
    }
}
