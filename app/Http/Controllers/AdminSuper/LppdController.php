<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\Lppd;
use App\Models\TheadLppd;
use App\Models\User;
use Illuminate\Http\Request;

class LppdController extends Controller
{
    public function getIndex()
    {
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        $lppd = Lppd::orderBy('created_at', 'desc')->get();
        $thead = TheadLppd::first();

        $results = [];

        foreach ($lppd as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.lppd.index', compact('lppd', 'results', 'user', 'thead'));
    }

    public function getCreateLppd()
    {
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        return view('components.super-admin.lppd.create', compact('user'));
    }

    public function getDetailsLppd($id)
    {
        $lppd = Lppd::where('id', $id)->first();
        return view('components.super-admin.lppd.details', compact('lppd'));
    }

    public function getEditLppd($id)
    {
        $lppd = Lppd::where('id', $id)->first();
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        return view('components.super-admin.lppd.update', compact('lppd', 'user'));
    }

    public function getStore(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama_lppd' => 'required',
            'role_id' => 'required',
        ], $message);

        Lppd::create([
            'nama_lppd' => $request->input('nama_lppd'),
            'role_id' => $request->input('role_id'),
            'thead_html' => $request->input('thead_html'),
            'tahun' => $request->input('tahun'),
        ]);

        return redirect()->route('get.IndexLppd')->with('status', 'Selamat lppd berhasil ditambahkan');
    }

    public function getUpdate(Request $request, $id)
    {
        $lppd = Lppd::where('id', $id)->first();

        $lppd->update([
            'nama_lppd' => $request->input('nama_lppd'),
            'role_id' => $request->input('role_id'),
            'thead_html' => $request->input('thead_html'),
            'tahun' => $request->input('tahun'),
        ]);

        return redirect()->route('get.IndexLppd')->with('status', 'Selamat lppd berhasil diperbarui');
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
        $thead = TheadLppd::first();
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();

        $results = [];

        foreach ($lppd as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.lppd.index', compact('lppd', 'results', 'thead', 'user'));
    }

    public function getUpdateThead(Request $request, $id)
    {
        $thead = TheadLppd::where('id', $id)->first();

        $thead->update([
            'indikator' => $request->input('indikator'),
            'bidang' => $request->input('bidang'),
            'tahun' => $request->input('tahun'),
            'a' => $request->input('a'),
            'b' => $request->input('b'),
            'hasil' => $request->input('hasil'),
        ]);

        return redirect()->back()->with('status', 'Selamat tabel iku berhasil diperbarui');
    }
}
