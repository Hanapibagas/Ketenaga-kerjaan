<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class PermintaanDataMasyarakatController extends Controller
{
    public function index_permintaan_masyarakat()
    {
        $permintaan = Permintaan::all();
        return view('components.admin-masyarakat.permintaan-data.index', compact('permintaan'));
    }

    public function create_permintaan_masyrakat()
    {
        return view('components.admin-masyarakat.permintaan-data.create');
    }

    public function store_permintaan_data(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        // dd($request->all());

        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'jenis_data' => 'required',
            'deskripsi' => 'required',
            'opd_produsen_data' => 'required',
            'tujuan' => 'required',
        ], $message);

        Permintaan::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jenis_data' => $request->input('jenis_data'),
            'deskripsi' => $request->input('deskripsi'),
            'opd_produsen_data' => $request->input('opd_produsen_data'),
            'tujuan' => $request->input('tujuan'),
        ]);

        return redirect()->route('index_permintaan_masyarakat')->with('status', 'Selamat permintaan data berhasil dikirim');
    }
}
