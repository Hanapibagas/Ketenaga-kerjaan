<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use App\Models\DetailsDataset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DataSeAdminSupertController extends Controller
{
    public function index_dataset()
    {
        $dataset = DataSet::all();
        return view('components.super-admin.data-set.index', compact('dataset'));
    }

    public function create_dataset()
    {
        return view('components.super-admin.data-set.create');
    }

    public function store_dataset(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama_dataset' => 'required',
            'kategori' => 'required',
            'opd' => 'required',
        ], $message);

        if ($request->file('file_data')) {
            $file = $request->file('file_data')->store('data-set', 'public');
        }

        $slug = Str::slug($request->nama_dataset);
        DataSet::create([
            'nama_dataset' => $request->input('nama_dataset'),
            'kategori' => $request->input('kategori'),
            'opd' => $request->input('opd'),
            'satuan' => $request->input('satuan'),
            'deskripsi' => $request->input('deskripsi'),
            'file_data' => $file,
            'slug' => $slug,
        ]);

        return redirect()->route('index_dataset')->with('status', 'Selamat dataset berhasil ditambahkan');
    }

    public function edit_dataset(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        return view('components.super-admin.data-set.update', compact('dataset'));
    }

    public function update_dataset(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        if ($request->file('file_data')) {
            $file = $request->file('file_data')->store('data-set', 'public');
            if ($dataset->file_data && file_exists(storage_path('app/public/' . $dataset->file_data))) {
                Storage::delete('public/' . $dataset->file_data);
                $file = $request->file('file_data')->store('data-set', 'public');
            }
        }

        if ($request->file('file_data') === null) {
            $file = $dataset->file_data;
        }

        $slug = Str::slug($request->nama_dataset);
        $dataset->update([
            'nama_dataset' => $request->input('nama_dataset'),
            'kategori' => $request->input('kategori'),
            'opd' => $request->input('opd'),
            'satuan' => $request->input('satuan'),
            'deskripsi' => $request->input('deskripsi'),
            'file_data' => $file,
            'slug' => $slug,
        ]);

        return redirect()->route('index_dataset')->with('status', 'Selamat dataset berhasil diperbarui');
    }

    public function destroy_dataset($id)
    {
        $delete = DataSet::find($id);

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }

    public function details_dataset_admin_super(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        $detailsdataset = DetailsDataset::all();

        return view('components.super-admin.data-set.details', compact('dataset', 'detailsdataset'));
    }

    public function filter_dataset_admin_super(Request $request, $id)
    {
        $tahun = $request->tahun;

        $dataset = DataSet::where('id', $id)->first();
        $detailsdataset = DetailsDataset::whereYear('tahun', $tahun)->where('dataset_id', $id)->get();

        return view('components.super-admin.data-set.details', compact('dataset', 'detailsdataset'));
    }
}
