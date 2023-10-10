<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use App\Models\DetailsDataset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatasetAdminKabController extends Controller
{
    public function index_kab()
    {
        $user = Auth::user();
        $dataset = DataSet::where('role_id', $user->id)->get();
        return view('components.admin-kab.data-set.index', compact('dataset'));
    }

    public function details_dataset_kab($id)
    {
        $dataset = DataSet::where('id', $id)->first();
        return view('components.admin-kab.data-set.details', compact('dataset'));
    }

    public function filter_dataset_kab(Request $request, $id)
    {
        $tahun = $request->tahun;

        $dataset = DataSet::where('id', $id)->first();
        $detailsdataset = DetailsDataset::whereYear('tahun', $tahun)->where('dataset_id', $id)->get();

        return view('components.admin-kab.data-set.details', compact('detailsdataset', 'dataset'));
    }

    public function tambah_dataset_kab_admin(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        $data = DataSet::all();
        return view('components.admin-kab.data-set.create', compact('dataset', 'data'));
    }

    public function store_dataset_kab_admin(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'dataset_id' => 'required',
            'variable' => 'required',
            'tahun' => 'required',
            'laki_laki' => 'required',
            'perempuan' => 'required',
        ], $message);

        DetailsDataset::create([
            'dataset_id' => $request->input('dataset_id'),
            'variable' => $request->input('variable'),
            'tahun' => $request->input('tahun'),
            'laki_laki' => $request->input('laki_laki'),
            'perempuan' => $request->input('perempuan'),
        ]);

        return redirect()->route('index_kab')->with('status', 'Selamat data details dataset berhasil ditambahkan');
    }

    public function edit_dataset_admin_kab(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        $datasetall = DataSet::all();
        $detailsdataset = DetailsDataset::where('id', $id)->first();

        return view('components.admin-kab.data-set.update', compact('dataset', 'datasetall', 'detailsdataset'));
    }

    public function update_dataset_admin_kab(Request $request, $id)
    {
        $dataset = DataSet::findOrFail($id);

        $dataset->update([
            'thead_html' => $request->input('thead_html'),
        ]);

        return redirect()->route('index_kab')->with('status', 'Selamat data details dataset berhasil diperbaui');
    }
}
