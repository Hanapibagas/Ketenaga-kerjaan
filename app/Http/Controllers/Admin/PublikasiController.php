<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PublikasiController extends Controller
{
    public function index_publikasi()
    {
        $publikasi = Publikasi::all();
        return view('components.dashboard.publikasi.index', compact('publikasi'));
    }

    public function create_publikasi()
    {
        return view('components.dashboard.publikasi.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'title' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'file' => 'mimes:pdf',
        ], $message);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('publikasi', 'public');
        }

        if ($request->file('file')) {
            $dokumen = $request->file('file')->store('dokumen-publikasi', 'public');
        }

        $slug = Str::slug($request->title);
        publikasi::create([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file,
            'file' => $dokumen
        ]);

        return redirect()->route('dashboard_publikasi')->with('status', 'Selamat data publikasi berhasil ditambahkan');
    }

    public function edit_publikasi(Request $request, $id)
    {
        $publikasi = Publikasi::where('id', $id)->first();
        return view('components.dashboard.publikasi.update', compact('publikasi'));
    }

    public function update_publikasi(Request $request, $id)
    {
        $publikasi = Publikasi::where('id', $id)->first();
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('publikasi', 'public');
            if ($publikasi->gambar && file_exists(storage_path('app/public/' . $publikasi->gambar))) {
                Storage::delete('public/' . $publikasi->gambar);
                $file = $request->file('gambar')->store('publikasi', 'public');
            }
        }

        if ($request->file('file')) {
            $dokumen = $request->file('file')->store('dokumen-publikasi', 'public');
            if ($publikasi->file && file_exists(storage_path('app/public/' . $publikasi->file))) {
                Storage::delete('public/' . $publikasi->file);
                $dokumen = $request->file('file')->store('dokumen-publikasi', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $publikasi->gambar;
        }

        if ($request->file('file') === null) {
            $dokumen = $publikasi->file;
        }

        $slug = Str::slug($request->title);
        $publikasi->update([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file,
            'file' => $dokumen
        ]);

        return redirect()->route('dashboard_publikasi')->with('status', 'Selamat data publikasi berhasil diperbarui');
    }

    public function destroy_publikasi($id)
    {
        $delete = Publikasi::find($id);
        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }
        if ($delete->file && file_exists(storage_path('app/public/' . $delete->file))) {
            Storage::delete('public/' . $delete->file);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
