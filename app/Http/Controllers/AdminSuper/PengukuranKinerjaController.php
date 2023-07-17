<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\PengukuranKinerja;
use Illuminate\Http\Request;

class PengukuranKinerjaController extends Controller
{
    public function getIndex()
    {
        $pengukuran = PengukuranKinerja::orderBy('created_at', 'desc')->get();

        $results = [];

        foreach ($pengukuran as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.pengukuran-kinerja.index', compact('pengukuran', 'results'));
    }

    public function getStore(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'indikator' => 'required',
            'tahun' => 'required',
        ], $message);

        PengukuranKinerja::create([
            'indikator' => $request->input('indikator'),
            'tahun' => $request->input('tahun'),
        ]);

        return redirect()->back()->with('status', 'Selamat pengukuran kinerja berhasil ditambahkan');
    }

    public function getUpdate(Request $request, $id)
    {
        $pengukuran = PengukuranKinerja::where('id', $id)->first();

        $pengukuran->update([
            'indikator' => $request->input('indikator'),
            'tahun' => $request->input('tahun')
        ]);

        return redirect()->back()->with('status', 'Selamat pengukuran kinerja berhasil diperbarui');
    }

    public function getDestroy($id)
    {
        $pengukuran = PengukuranKinerja::where('id', $id)->first();

        $pengukuran->delete();

        return redirect()->back()->with('status', 'Data pengukuran kinerja berhasil dihapus');
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

        return view('components.super-admin.pengukuran-kinerja.index', compact('pengukuran', 'results'));
    }
}
