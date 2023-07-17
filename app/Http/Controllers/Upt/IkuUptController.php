<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use Illuminate\Http\Request;

class IkuUptController extends Controller
{
    public function getIndex()
    {
        $iku = Iku::all();
        $results = [];

        foreach ($iku as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.admin-upt.iku.index', compact('iku', 'results'));
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

        return view('components.admin-upt.iku.index', compact('iku', 'results'));
    }

    public function getUpdate(Request $request, $id)
    {
        $iku = Iku::findOrFail($id);

        $iku->a = $request->input('a');
        $iku->b = $request->input('b');

        $iku->save();
        // dd($iku);
        return redirect()->back()->with('status', 'Selamat data iku berhasil diperbaui');
    }
}
