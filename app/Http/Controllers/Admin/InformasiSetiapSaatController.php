<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformasiSetiapSaat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiSetiapSaatController extends Controller
{
    public function index_setiap_saat()
    {
        $setiapsaat = InformasiSetiapSaat::all();
        return view('components.dashboard.informasi.setiap-saat.index', compact('setiapsaat'));
    }

    public function create_setiap_saat()
    {
        return view('components.dashboard.informasi.setiap-saat.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama' => 'required',
        ], $message);

        if ($request->file('file')) {
            $file = $request->file('file')->store('data-setiap-saat', 'public');
        }

        InformasiSetiapSaat::create([
            'nama' => $request->input('nama'),
            'file' => $file
        ]);

        return redirect()->route('index_setiap_saat')->with('status', 'Selamat data setiap saat berhasil ditambahkan');
    }

    public function edit_setiap_saat(Request $request, $id)
    {
        $setiapsaat = InformasiSetiapSaat::where('id', $id)->first();
        return view('components.dashboard.informasi.setiap-saat.update', compact('setiapsaat'));
    }

    public function update_setiap_saat(Request $request, $id)
    {
        $setiapsaat = InformasiSetiapSaat::where('id', $id)->first();
        if ($request->file('file')) {
            $file = $request->file('file')->store('data-setiap-saat', 'public');
            if ($setiapsaat->file && file_exists(storage_path('app/public/' . $setiapsaat->file))) {
                Storage::delete('public/' . $setiapsaat->file);
                $file = $request->file('file')->store('data-setiap-saat', 'public');
            }
        }

        if ($request->file('file') === null) {
            $file = $setiapsaat->file;
        }

        $setiapsaat->update([
            'nama' => $request->input('nama'),
            'file' => $file
        ]);

        return redirect()->route('index_setiap_saat')->with('status', 'Selamat data setiap saat berhasil diperbarui');
    }

    public function destroy_setiap_saat($id)
    {
        $delete = InformasiSetiapSaat::find($id);
        if ($delete->file && file_exists(storage_path('app/public/' . $delete->file))) {
            Storage::delete('public/' . $delete->file);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
