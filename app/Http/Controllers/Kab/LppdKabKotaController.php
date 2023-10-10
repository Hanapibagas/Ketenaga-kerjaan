<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\Lppd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LppdKabKotaController extends Controller
{
    public function getIndexLppdKab()
    {
        $user = Auth::user();
        $lppd = Lppd::where('role_id', $user->id)->get();

        return view('components.admin-kab.lppd.index', compact('lppd'));
    }

    public function getDetailsKabKotaLppd($id)
    {
        $lppd = Lppd::where('id', $id)->first();

        return view('components.admin-kab.lppd.details', compact('lppd'));
    }

    public function putUpdateKabKotaLppd(Request $request, $id)
    {
        $lppd = Lppd::where('id', $id)->first();

        $lppd->update([
            'thead_html' => $request->input('thead_html'),
        ]);

        return redirect()->route('getIndexLppdKab')->with('status', 'Selamat data details dataset berhasil diperbaui');
    }
}
