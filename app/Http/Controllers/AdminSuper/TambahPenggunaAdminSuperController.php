<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TambahPenggunaAdminSuperController extends Controller
{
    public function index_tambah_penguuna()
    {
        $pengguna = User::all();
        return view('components.super-admin.pengguna.index', compact('pengguna'));
    }

    public function create_pengguna()
    {
        return view('components.super-admin.pengguna.create');
    }

    public function store_pengguna(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'email' => 'required',
            'roles' => 'required',
        ], $message);

        User::create([
            'email' => request('email'),
            'roles' => request('roles'),
            'password' => bcrypt('12345678'),
        ]);

        return redirect()->route('index_tambah_penguuna')->with('status', 'Selamat data akun pengguna berhasil ditambahkan');
    }

    public function destroy_pengguna($id)
    {
        $delete = User::find($id);

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
