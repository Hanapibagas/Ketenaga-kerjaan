<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\PengukuranKinerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengukuranKinerjaUptController extends Controller
{
    public function getIndex()
    {
        $user = Auth::user();
        $pengukuran = PengukuranKinerja::where('user_id', $user->id)->get();
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

        $user = Auth::user();
        $pengukuran = PengukuranKinerja::where('user_id', $user->id)->where('tahun', $tahun)->get();

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
