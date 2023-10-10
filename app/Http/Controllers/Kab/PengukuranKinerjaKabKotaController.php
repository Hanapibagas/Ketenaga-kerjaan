<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\PengukuranKinerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengukuranKinerjaKabKotaController extends Controller
{
    public function getIndexPengukuranKabKota()
    {
        $user = Auth::user();
        $pengukuran = PengukuranKinerja::where('role_id', $user->id)->get();

        return view('components.admin-kab.pengukuran-kinerja.index', compact('pengukuran'));
    }

    public function getDetailsPengkuranKabKota($id)
    {
        $pengukuran = PengukuranKinerja::where('id', $id)->first();

        return view('components.admin-kab.pengukuran-kinerja.details', compact('pengukuran'));
    }

    public function putDetailsPengukuranKabKota(Request $request, $id)
    {
        $pengukuran = PengukuranKinerja::where('id', $id)->first();

        $pengukuran->update([
            'thead_html' => $request->input('thead_html')
        ]);

        return redirect()->route('getIndexPengukuranKabKota')->with('status', 'Selamat data details dataset berhasil diperbaui');;
    }
}
