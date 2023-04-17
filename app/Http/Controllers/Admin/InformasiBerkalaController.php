<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformasiBerkala;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class InformasiBerkalaController extends Controller
{
    public function index_berkala()
    {
        $berkala = InformasiBerkala::all();
        return view('components.dashboard.informasi.berkala.index', compact('berkala'));
    }

    public function create_berkala()
    {
        return view('components.dashboard.informasi.berkala.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);

        if ($request->file('file')) {
            $file = $request->file('file')->store('data-berkala', 'public');
        }

        InformasiBerkala::create([
            'nama' => $request->input('nama'),
            'file' => $file
        ]);

        return redirect()->route('index_berkala')->with('status', 'Selamat data berkala berhasil ditambahkan');
    }

    public function edit_berkala(Request $request, $id)
    {
        $berkala = InformasiBerkala::where('id', $id)->first();
        return view('components.dashboard.informasi.berkala.update', compact('berkala'));
    }

    public function update_berkala(Request $request, $id)
    {
        $berkala = InformasiBerkala::where('id', $id)->first();
        if ($request->file('file')) {
            $file = $request->file('file')->store('data-berkala', 'public');
            if ($berkala->file && file_exists(storage_path('app/public/' . $berkala->file))) {
                Storage::delete('public/' . $berkala->file);
                $file = $request->file('file')->store('data-berkala', 'public');
            }
        }

        if ($request->file('file') === null) {
            $file = $berkala->file;
        }

        $berkala->update([
            'nama' => $request->input('nama'),
            'file' => $file
        ]);

        return redirect()->route('index_berkala')->with('status', 'Selamat data berkala berhasil diperbarui');
    }

    public function destroy_berkala($id)
    {
        $delete = InformasiBerkala::find($id);
        if ($delete->file && file_exists(storage_path('app/public/' . $delete->file))) {
            Storage::delete('public/' . $delete->file);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
