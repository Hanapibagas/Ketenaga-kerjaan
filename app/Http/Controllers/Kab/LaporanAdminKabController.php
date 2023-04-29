<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;


class LaporanAdminKabController extends Controller
{
    public function index_laporan_kab()
    {
        $laporan = PermohonanInformasiPublik::all();
        return view('components.admin-kab.laporan.index', compact('laporan'));
    }

    public function export_excel_laporan_kab()
    {
        return Excel::download(new LaporanExport, 'datalaporan.xlsx');
    }
}
