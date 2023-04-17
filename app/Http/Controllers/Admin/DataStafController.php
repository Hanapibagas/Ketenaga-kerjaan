<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataStaf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DataStafController extends Controller
{
    public function index_staf()
    {
        $staf = DataStaf::all();
        return view('components.dashboard.data-staf.index', compact('staf'));
    }

    public function create_staf()
    {
        return view('components.dashboard.data-staf.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('data-staf', 'public');
        }

        DataStaf::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'gambar' => $file
        ]);

        return redirect()->route('index_staf')->with('status', 'Selamat data staf berhasil ditambahkan');
    }

    public function edit_staf(Request $request, $id)
    {
        $staf = DataStaf::where('id', $id)->first();
        return view('components.dashboard.data-staf.update', compact('staf'));
    }

    public function update_staf(Request $request, $id)
    {
        $staf = DataStaf::where('id', $id)->first();
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('data-staf', 'public');
            if ($staf->gambar && file_exists(storage_path('app/public/' . $staf->gambar))) {
                Storage::delete('public/' . $staf->gambar);
                $file = $request->file('gambar')->store('data-staf', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $staf->gambar;
        }

        $staf->update([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'gambar' => $file
        ]);

        return redirect()->route('index_staf')->with('status', 'Selamat data staf berhasil diperbarui');
    }

    public function destroy_staf($id)
    {
        $delete = DataStaf::find($id);
        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data staf berhasil dihapus']);
    }
}
