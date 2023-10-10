<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;
use App\Models\DataSet;
use App\Models\Iku;
use App\Models\Lppd;
use App\Models\PengukuranKinerja;
use Illuminate\Support\Facades\Auth;

class LaporanAdminUptController extends Controller
{
    public function index_laporan_upt()
    {
        $user = Auth::user();
        $dataset = DataSet::where('role_id', $user->id)->orderBy('created_at', 'desc')->get();
        $iku = Iku::where('role_id', $user->id)->orderBy('created_at', 'desc')->get();
        $lppd = Lppd::where('role_id', $user->id)->orderBy('created_at', 'desc')->get();
        $pengukur = PengukuranKinerja::where('role_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('components.admin-upt.laporan.index', compact('dataset', 'iku', 'lppd', 'pengukur'));
    }

    public function getDetails($id)
    {
        $dataset = Dataset::find($id);
        $iku = Iku::find($id);
        $lppd = Lppd::find($id);
        $pengukuran = PengukuranKinerja::find($id);

        return view('components.admin-upt.laporan.details', compact('dataset', 'iku', 'lppd', 'pengukuran'));
    }
}
