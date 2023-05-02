<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformasiSertaMerta;
use Illuminate\Http\Request;

class InformasiSertaMertaController extends Controller
{
    public function index_serta_merta()
    {
        $sertamerta = InformasiSertaMerta::all();
        return view('components.dashboard.informasi.serta-merta.index', compact('sertamerta'));
    }

    public function create_serta_merta()
    {
        return view('components.dashboard.informasi.serta-merta.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'link' => 'required',
        ], $message);

        InformasiSertaMerta::create([
            'nama' => $request->input('nama'),
            'link' => $request->input('link'),
        ]);

        return redirect()->route('index_serta_merta')->with('status', 'Selamat data serta merta berhasil ditambahkan');
    }

    public function edit_serta_merta(Request $request, $id)
    {
        $sertamerta = InformasiSertaMerta::where('id', $id)->first();
        return view('components.dashboard.informasi.serta-merta.update', compact('sertamerta'));
    }

    public function update_serta_merta(Request $request, $id)
    {
        $sertamerta = InformasiSertaMerta::where('id', $id)->first();

        $sertamerta->update([
            'nama' => $request->input('nama'),
            'link' => $request->input('link'),
        ]);

        return redirect()->route('index_serta_merta')->with('status', 'Selamat data serta merta berhasil diperbarui');
    }

    public function destroy_serta_merta($id)
    {
        $delete = InformasiSertaMerta::find($id);

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
