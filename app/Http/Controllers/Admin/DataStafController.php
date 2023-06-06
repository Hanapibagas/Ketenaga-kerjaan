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
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'pendidikan' => 'required',
            'biodata' => 'required'
        ], $message);

        if ($request->file('foto')) {
            $file = $request->file('foto')->store('data-staf', 'public');
        }

        DataStaf::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'pangkat' => $request->input('pangkat'),
            'pendidikan' => $request->input('pendidikan'),
            'biodata' => $request->input('biodata'),
            'foto' => $file
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
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'pendidikan' => 'required',
            'biodata' => 'required'
        ], $message);

        $staf = DataStaf::where('id', $id)->first();

        if ($request->file('foto')) {
            $file = $request->file('foto')->store('data-staf', 'public');
            if ($staf->foto && file_exists(storage_path('app/public/' . $staf->foto))) {
                Storage::delete('public/' . $staf->foto);
                $file = $request->file('foto')->store('data-staf', 'public');
            }
        }

        if ($request->file('foto') === null) {
            $file = $staf->foto;
        }

        $staf->update([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'pangkat' => $request->input('pangkat'),
            'pendidikan' => $request->input('pendidikan'),
            'biodata' => $request->input('biodata'),
            'foto' => $file
        ]);

        return redirect()->route('index_staf')->with('status', 'Selamat data staf berhasil diperbarui');
    }

    public function details_data_staf(Request $request, $id)
    {
        $staf = DataStaf::where('id', $id)->first();
        return view('components.dashboard.data-staf.details_staf', compact('staf'));
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
