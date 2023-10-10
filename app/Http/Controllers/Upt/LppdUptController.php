<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\Lppd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LppdUptController extends Controller
{
    public function getIndex()
    {
        $user = Auth::user();
        $lppd = Lppd::where('role_id', $user->id)->get();
        $results = [];

        foreach ($lppd as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.admin-upt.lppd.index', compact('lppd', 'results'));
    }

    public function getDetailsLppd($id)
    {
        $lppd = Lppd::where('id', $id)->first();

        return view('components.admin-upt.lppd.details', compact('lppd'));
    }

    public function getFilterTahun(Request $request)
    {
        $tahun = $request->tahun;

        $user = Auth::user();
        $lppd = Lppd::where('user_id', $user->id)->whereYear('tahun', $tahun)->get();

        $results = [];
        foreach ($lppd as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.admin-upt.lppd.index', compact('lppd', 'results'));
    }

    public function getUpdate(Request $request, $id)
    {
        $dataset = Lppd::findOrFail($id);

        $dataset->update([
            'thead_html' => $request->input('thead_html'),
        ]);

        return redirect()->route('get.IndexLppdUpt')->with('status', 'Selamat data details dataset berhasil diperbaui');
    }
}
