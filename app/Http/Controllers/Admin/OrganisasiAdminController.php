<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiAdminController extends Controller
{
    public function index_organisasi_admin()
    {
        $organisasi = Organisasi::all();
        return view('components.dashboard.organisasi.index', compact('organisasi'));
    }

    public function create_organisasi_admin()
    {
        return view('components.dashboard.organisasi.create');
    }

    public function store_organisasi_admin(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
        ], $message);

        Organisasi::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
        ]);

        return redirect()->route('index_organisasi_admin')->with('status', 'Selamat data organisasi berhasil ditambahkan');
    }

    public function edit_organisasi_admin(Request $request, $id)
    {
        $organisasi = Organisasi::where('id', $id)->first();
        return view('components.dashboard.organisasi.update', compact('organisasi'));
    }

    public function update_organisasi_admin(Request $request, $id)
    {
        $organisasi = Organisasi::where('id', $id)->first();

        $organisasi->update([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
        ]);

        return redirect()->route('index_organisasi_admin')->with('status', 'Selamat data organisasi berhasil diperebarui');
    }

    public function destroy_organisasi_admin($id)
    {
        $organisasi = Organisasi::where('id', $id)->first();

        $organisasi->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
