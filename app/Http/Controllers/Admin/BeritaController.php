<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index_berita()
    {
        $berita = Berita::all();
        return view('components.dashboard.berita.index', compact('berita'));
    }

    public function create_berita()
    {
        return view('components.dashboard.berita.create');
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
        ], $message);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('berita', 'public');
        }

        $slug = Str::slug($request->title);
        Berita::create([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file
        ]);

        return redirect()->route('dashboard_berita')->with('status', 'Selamat data berita berhasil ditambahkan');
    }

    public function edit_berita(Request $request, $id)
    {
        $berita = Berita::where('id', $id)->first();
        return view('components.dashboard.berita.update', compact('berita'));
    }

    public function update_berita(Request $request, $id)
    {
        $berita = Berita::where('id', $id)->first();
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('berita', 'public');
            if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
                Storage::delete('public/' . $berita->gambar);
                $file = $request->file('gambar')->store('berita', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $berita->gambar;
        }

        $slug = Str::slug($request->title);
        $berita->update([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file
        ]);

        return redirect()->route('dashboard_berita')->with('status', 'Selamat data berita berhasil diperbarui');
    }

    public function destroy_berita($id)
    {
        $delete = Berita::find($id);
        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
