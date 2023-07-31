<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\PengukuranKinerja;
use App\Models\TheadPengukuranKinerja;
use App\Models\User;
use Illuminate\Http\Request;

class PengukuranKinerjaController extends Controller
{
    public function getIndex()
    {
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        $pengukuran = PengukuranKinerja::orderBy('created_at', 'desc')->get();
        $thead = TheadPengukuranKinerja::first();

        $results = [];

        foreach ($pengukuran as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.pengukuran-kinerja.index', compact('pengukuran', 'results', 'user', 'thead'));
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
            'user_id' => $request->input('user_id'),
            'tahun' => $request->input('tahun'),
        ]);

        return redirect()->back()->with('status', 'Selamat pengukuran kinerja berhasil ditambahkan');
    }

    public function getUpdate(Request $request, $id)
    {
        $pengukuran = PengukuranKinerja::where('id', $id)->first();

        $pengukuran->update([
            'indikator' => $request->input('indikator'),
            'user_id' => $request->input('user_id'),
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

        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        $pengukuran = PengukuranKinerja::where('tahun', $tahun)->get();
        $thead = TheadPengukuranKinerja::first();

        $results = [];

        foreach ($pengukuran as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.super-admin.pengukuran-kinerja.index', compact('pengukuran', 'results', 'user', 'thead'));
    }

    public function getUpdateThead(Request $request, $id)
    {
        $thead = TheadPengukuranKinerja::where('id', $id)->first();

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
