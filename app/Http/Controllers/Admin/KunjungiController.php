<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kunjungi;
use Illuminate\Http\Request;

class KunjungiController extends Controller
{
    public function getIndexKunjungi()
    {
        $kunjungi = Kunjungi::all();
        return view('components.dashboard.kunjungi.index', compact('kunjungi'));
    }

    public function getCreateKunjungi()
    {
        return view('components.dashboard.kunjungi.create');
    }

    public function storeKunjungan(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'name' => 'required',
            'link' => 'required'
        ], $message);

        Kunjungi::create([
            'name' => $request->input('name'),
            'link' => $request->input('link')
        ]);

        return redirect()->route('getIndexKunjungi')->with('status', 'Selamat data web kunjungi berhasil ditambahkan');
    }

    public function getEditKunjungan(Request $request, $id)
    {
        $kunjungi = Kunjungi::where('id', $id)->first();
        return view('components.dashboard.kunjungi.update', compact('kunjungi'));
    }

    public function putKunjungi(Request $request, $id)
    {
        $kunjungi = Kunjungi::where('id', $id)->first();

        $kunjungi->update([
            'name' => $request->input('name'),
            'link' => $request->input('link')
        ]);

        return redirect()->route('getIndexKunjungi')->with('status', 'Selamat data web kunjungi berhasil diperbarui');
    }

    public function destroyKunjungan($id)
    {
        $kunjungi = Kunjungi::find($id);

        $kunjungi->delete();

        // return response()->json(['status' => 'Selamat data kunjungi berhasil dihapus']);
        return redirect()->back()->with('status', 'Data kunjungi berhasil dihapus');
    }
}
