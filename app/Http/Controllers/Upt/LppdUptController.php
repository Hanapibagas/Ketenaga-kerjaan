<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\Lppd;
use Illuminate\Http\Request;

class LppdUptController extends Controller
{
    public function getIndex()
    {
        $lppd = Lppd::all();
        $results = [];

        foreach ($lppd as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.admin-upt.lppd.index', compact('lppd', 'results'));
    }

    public function getFilterTahun(Request $request)
    {
        $tahun = $request->tahun;

        $lppd = Lppd::whereYear('tahun', $tahun)->get();

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
        $lppd = Lppd::findOrFail($id);

        $lppd->a = $request->input('a');
        $lppd->b = $request->input('b');
        $lppd->link_terkait = $request->input('link_terkait');

        $lppd->save();
        // dd($lppd);
        return redirect()->back()->with('status', 'Selamat data iku berhasil diperbaui');
    }
}
