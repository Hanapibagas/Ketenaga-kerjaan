<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        $slug = Str::slug($request->nama_dataset);
        DataSet::create([
            'nama_dataset' => $request->input('nama_dataset'),
            'kategori' => $request->input('kategori'),
            'opd' => $request->input('opd'),
            'satuan' => $request->input('satuan'),
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

        $slug = Str::slug($request->nama_dataset);
        $dataset->update([
            'nama_dataset' => $request->input('nama_dataset'),
            'kategori' => $request->input('kategori'),
            'opd' => $request->input('opd'),
            'satuan' => $request->input('satuan'),
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

    public function details(Request $request, $id)
    {
        
    }
}
