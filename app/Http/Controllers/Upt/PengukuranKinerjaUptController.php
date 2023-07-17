<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\PengukuranKinerja;
use Illuminate\Http\Request;

class PengukuranKinerjaUptController extends Controller
{
    public function getIndex()
    {
        $pengukuran = PengukuranKinerja::all();
        $results = [];

        foreach ($pengukuran as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.admin-upt.pengukuran-kinerja.index', compact('pengukuran', 'results'));
    }

    public function getFilterTahun(Request $request)
    {
        $tahun = $request->tahun;

        $pengukuran = PengukuranKinerja::where('tahun', $tahun)->get();

        $results = [];
        foreach ($pengukuran as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.admin-upt.pengukuran-kinerja.index', compact('pengukuran', 'results'));
    }

    public function getUpdate(Request $request, $id)
    {
        $pengukuran = PengukuranKinerja::findOrFail($id);

        $pengukuran->a = $request->input('a');
        $pengukuran->b = $request->input('b');

        $pengukuran->save();
        // dd($iku);
        return redirect()->back()->with('status', 'Selamat data triwulan berhasil diperbaui');
    }
}
