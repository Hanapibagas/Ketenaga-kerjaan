<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use Illuminate\Http\Request;

class IkuController extends Controller
{
    public function getIndex()
    {
        $iku = Iku::orderBy('created_at', 'desc')->get();
        $results = [];

        foreach ($iku as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.iku.index', compact('iku', 'results'));
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

        Iku::create([
            'indikator' => $request->input('indikator'),
            'tahun' => $request->input('tahun'),
        ]);

        return redirect()->back()->with('status', 'Selamat iku berhasil ditambahkan');
    }

    public function getUpdate(Request $request, $id)
    {
        $iku = Iku::where('id', $id)->first();

        $iku->update([
            'indikator' => $request->input('indikator')
        ]);

        return redirect()->back()->with('status', 'Selamat iku berhasil diperbarui');
    }

    public function getDestroy($id)
    {
        $iku = Iku::where('id', $id)->first();

        $iku->delete();

        return redirect()->back()->with('status', 'Data iku berhasil dihapus');
    }

    public function getFilterTahun(Request $request)
    {
        $tahun = $request->tahun;

        $iku = Iku::whereYear('tahun', $tahun)->get();

        $results = [];

        foreach ($iku as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.iku.index', compact('iku', 'results'));
    }
}
