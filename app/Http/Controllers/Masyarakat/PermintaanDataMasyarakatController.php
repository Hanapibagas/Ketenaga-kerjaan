<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;

class PermintaanDataMasyarakatController extends Controller
{
    public function index_permintaan_masyarakat()
    {
        $permintaan = PermohonanInformasiPublik::all();
        return view('components.admin-masyarakat.permintaan-data.index', compact('permintaan'));
    }

    public function create_permintaan_masyrakat()
    {
        return view('components.admin-masyarakat.permintaan-data.create');
    }

    public function store_permintaan_data(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu',
            'image' => 'Mohon maaf type file anda bukan foto'
        ];

        $this->validate($request, [
            'email' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'rincian' => 'required',
            'tujuan' => 'required',
            'foto_ktp' => 'required|image|mimes:jpg,png',
        ], $message);

        if ($request->file('foto_ktp')) {
            $file = $request->file('foto_ktp')->store('permohonan-publik', 'public');
        }

        PermohonanInformasiPublik::create([
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'no_hp' => $request->input('no_hp'),
            'no_ktp' => $request->input('no_ktp'),
            'nomor_pengesahaan' => $request->input('nomor_pengesahaan'),
            'alamat' => $request->input('alamat'),
            'pekerjaan' => $request->input('pekerjaan'),
            'rincian' => $request->input('rincian'),
            'tujuan' => $request->input('tujuan'),
            'foto_ktp' => $file
        ]);

        return redirect()->route('index_permintaan_masyarakat')->with('status', 'Selamat permintaan data berhasil dikirim');
    }
}
