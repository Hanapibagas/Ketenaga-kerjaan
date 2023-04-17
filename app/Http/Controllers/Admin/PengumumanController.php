<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index_pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('components.dashboard.pengumuman.index', compact('pengumuman'));
    }

    public function create_pengumuman()
    {
        return view('components.dashboard.pengumuman.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        if ($request->file('file')) {
            $file = $request->file('file')->store('pengumuman', 'public');
        }

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('pengumuman', 'public');
        }

        Pengumuman::create([
            'title' => $request->input('title'),
            'file' => $file,
            'gambar' => $gambar,
        ]);

        return redirect()->route('index_pengumuman')->with('status', 'Selamat data pengumuman berhasil ditambahkan');
    }

    public function edit_pengumuman(Request $request, $id)
    {
        $pengumuman = Pengumuman::where('id', $id)->first();
        return view('components.dashboard.pengumuman.update', compact('pengumuman'));
    }

    public function update_pengumuman(Request $request, $id)
    {
        $berita = Pengumuman::where('id', $id)->first();
        if ($request->file('file')) {
            $file = $request->file('file')->store('pengumuman', 'public');
            if ($berita->file && file_exists(storage_path('app/public/' . $berita->file))) {
                Storage::delete('public/' . $berita->file);
                $file = $request->file('file')->store('pengumuman', 'public');
            }
        }

        if ($request->file('file') === null) {
            $file = $berita->file;
        }

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('pengumuman', 'public');
            if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
                Storage::delete('public/' . $berita->gambar);
                $gambar = $request->file('gambar')->store('pengumuman', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $gambar = $berita->gambar;
        }

        $berita->update([
            'title' => $request->input('title'),
            'file' => $file,
            'gambar' => $gambar
        ]);

        return redirect()->route('index_pengumuman')->with('status', 'Selamat data pengumuman berhasil diperbarui');
    }

    public function destroy_pengumuman($id)
    {
        $delete = Pengumuman::find($id);
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
