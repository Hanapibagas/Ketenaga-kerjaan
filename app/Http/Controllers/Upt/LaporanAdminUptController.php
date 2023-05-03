<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;

class LaporanAdminUptController extends Controller
{
    public function index_laporan_upt()
    {
        $laporan = PermohonanInformasiPublik::all();
        return view('components.admin-upt.laporan.index', compact('laporan'));
    }

    public function export_excel_laporan_upt()
    {
        return Excel::download(new LaporanExport, 'datalaporan.xlsx');
    }
}
