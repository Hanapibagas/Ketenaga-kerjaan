<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IkuKabKotaController extends Controller
{
    public function getIndexKabKotaIku()
    {
        $user = Auth::user();
        $iku = Iku::where('role_id', $user->id)->get();

        return view('components.admin-kab.iku.index', compact('iku'));
    }

    public function getDetailsKabKotaIku($id)
    {
        $iku = Iku::where('id', $id)->first();

        return view('components.admin-kab.iku.details', compact('iku'));
    }

    public function putDetailsKabKota(Request $request, $id)
    {
        $iku = Iku::where('id', $id)->first();

        $iku->update([
            'thead_html' => $request->input('thead_html'),
        ]);

        return redirect()->route('getIndexKabKotaIku')->with('status', 'Selamat data details dataset berhasil diperbaui');
    }
}
