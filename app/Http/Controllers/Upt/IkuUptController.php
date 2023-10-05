<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\Iku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IkuUptController extends Controller
{
    public function getIndex()
    {
        $user = Auth::user();
        $iku = Iku::where('user_id', $user->id)->get();
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

        $user = Auth::user();
        $iku = Iku::where('user_id', $user->id)->whereYear('tahun', $tahun)->get();

        $results = [];
        foreach ($iku as $data) {
            $result = $data->a * $data->b;
            $results[$data->id] = $result;
        }

        $total = array_sum($results) / 100;

        return view('components.admin-upt.iku.index', compact('iku', 'results'));
    }

    public function getUpdate(Request $request)
    {
        foreach($request->a as $key => $item) {
            $iku = Iku::findOrFail($request->id[$key]);
            $iku->a = $request->a[$key];

            $iku->b = $request->b[$key];
            $iku->save();
        }

        return redirect()->back()->with('status', 'Selamat data iku berhasil diperbaui');
    }
}
