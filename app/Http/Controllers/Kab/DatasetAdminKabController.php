<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use App\Models\DetailsDataset;
use Illuminate\Http\Request;

class DatasetAdminKabController extends Controller
{
    public function index_kab()
    {
        $dataset = DataSet::all();
        return view('components.admin-kab.data-set.index', compact('dataset'));
    }

    public function details_dataset_kab(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        $detailsdataset = DetailsDataset::all();
        return view('components.admin-kab.data-set.details', compact('dataset', 'detailsdataset'));
    }

    public function filter_dataset_kab(Request $request, $id)
    {
        $tahun = $request->tahun;

        $detailsdataset = DetailsDataset::whereYear('tahun', $tahun)->get();
        $dataset = DataSet::where('id', $id)->first();

        return view('components.admin-kab.data-set.details', compact('detailsdataset', 'dataset'));
    }
}
