<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use App\Models\TheadIku;
use App\Models\User;
use Illuminate\Http\Request;

class IkuController extends Controller
{
    public function getIndex()
    {
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        $iku = Iku::orderBy('created_at', 'desc')->get();
        $thead = TheadIku::first();
        $results = [];

        foreach ($iku as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.iku.index', compact('iku', 'results', 'user', 'thead'));
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
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->back()->with('status', 'Selamat iku berhasil ditambahkan');
    }

    public function getUpdate(Request $request, $id)
    {
        $iku = Iku::where('id', $id)->first();

        $iku->update([
            'indikator' => $request->input('indikator'),
            'tahun' => $request->input('tahun'),
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
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        $tahun = $request->tahun;
        $thead = TheadIku::first();

        $iku = Iku::whereYear('tahun', $tahun)->get();

        $results = [];

        foreach ($iku as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.iku.index', compact('iku', 'user', 'results', 'thead'));
    }

    public function getUpdateThead(Request $request, $id)
    {
        $thead = TheadIku::where('id', $id)->first();

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
