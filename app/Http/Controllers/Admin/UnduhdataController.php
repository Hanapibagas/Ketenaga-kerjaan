<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UnduhdataController extends Controller
{
    public function index_unduhdata()
    {
        $unduhdata = DataSet::all();
        return view('components.dashboard.Dataset.unduh-data.index', compact('unduhdata'));
    }

    public function create_unduhdata()
    {
        return view('components.dashboard.Dataset.unduh-data.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'file' => 'required',
        ]);

        if ($request->file('file')) {
            $dokumen = $request->file('file')->store('dataset-unduhdata', 'public');
        }

        $slug = Str::slug($request->title);
        DataSet::create([
            'title' => $request->input('title'),
            'slug' => $slug,
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'file' => $dokumen
        ]);

        return redirect()->route('dashboard_unduhdata')->with('status', 'Selamat data Dataset berhasil ditambahkan');
    }

    public function edit_unduhdata(Request $request, $id)
    {
        $unduhdata = DataSet::where('id', $id)->first();
        return view('components.dashboard.Dataset.unduh-data.update', compact('unduhdata'));
    }

    public function update_unduhdata(Request $request, $id)
    {
        $unduhdata = DataSet::where('id', $id)->first();
        if ($request->file('file')) {
            $dokumen = $request->file('file')->store('dataset-unduhdata', 'public');
            if ($unduhdata->file && file_exists(storage_path('app/public/' . $unduhdata->file))) {
                Storage::delete('public/' . $unduhdata->file);
                $dokumen = $request->file('file')->store('dataset-unduhdata', 'public');
            }
        }

        if ($request->file('file') === null) {
            $dokumen = $unduhdata->file;
        }

        $slug = Str::slug($request->title);
        $unduhdata->update([
            'title' => $request->input('title'),
            'slug' => $slug,
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'file' => $dokumen
        ]);

        return redirect()->route('dashboard_unduhdata')->with('status', 'Selamat data dataset berhasil diperbarui');
    }

    public function destroy_unduhdata($id)
    {
        $delete = DataSet::where('id', $id)->first();
        if ($delete->file && file_exists(storage_path('app/public/' . $delete->file))) {
            Storage::delete('public/' . $delete->file);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
