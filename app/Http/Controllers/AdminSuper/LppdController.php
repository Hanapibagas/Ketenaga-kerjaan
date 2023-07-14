<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\Lppd;
use Illuminate\Http\Request;

class LppdController extends Controller
{
    public function getIndex()
    {
        $lppd = Lppd::orderBy('created_at', 'desc')->get();

        return view('components.super-admin.lppd.index', compact('lppd'));
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

        Lppd::create([
            'indikator' => $request->input('indikator'),
            'tahun' => $request->input('tahun'),
        ]);

        return redirect()->back()->with('status', 'Selamat lppd berhasil ditambahkan');
    }

    public function getUpdate(Request $request, $id)
    {
        $lppd = Lppd::where('id', $id)->first();

        $lppd->update([
            'indikator' => $request->input('indikator')
        ]);

        return redirect()->back()->with('status', 'Selamat lppd berhasil diperbarui');
    }

    public function getDestroy($id)
    {
        $lppd = Lppd::where('id', $id)->first();

        $lppd->delete();

        return redirect()->back()->with('status', 'Data lppd berhasil dihapus');
    }

    public function getFilterTahun(Request $request)
    {
        $tahun = $request->tahun;

        $lppd = Lppd::whereYear('tahun', $tahun)->get();

        return view('components.super-admin.lppd.index', compact('lppd'));
    }
}
