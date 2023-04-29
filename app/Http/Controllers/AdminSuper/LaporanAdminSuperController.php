<?php

namespace App\Http\Controllers\AdminSuper;

use App\Exports\LaporanExport;
use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanAdminSuperController extends Controller
{
    public function index_laporan_admin_super()
    {
        $laporan = PermohonanInformasiPublik::all();
        return view('components.super-admin.laporan.index', compact('laporan'));
    }

    public function export_excel_laporan()
    {
        return Excel::download(new LaporanExport, 'datalaporan.xlsx');
    }
}
