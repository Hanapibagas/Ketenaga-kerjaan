<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infografis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class InfografisController extends Controller
{
    public function dashboard_infografis()
    {
        $infografis = Infografis::all();
        return view('components.dashboard.infografis.index', compact('infografis'));
    }

    public function create_infografis()
    {
        return view('components.dashboard.infografis.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'title' => 'required',
            'type_infografis' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ], $message);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('infografis', 'public');
        }

        $slug = Str::slug($request->title);
        Infografis::create([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'type_infografis' => $request->input('type_infografis'),
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file
        ]);

        return redirect()->route('dashboard_infografis')->with('status', 'Selamat data infografis berhasil ditambahkan');
    }
    public function edit_infografis(Request $request, $id)
    {
        $infografis = Infografis::where('id', $id)->first();
        return view('components.dashboard.infografis.update', compact('infografis'));
    }

    public function update_inforgrafis(Request $request, $id)
    {
        $infografis = Infografis::where('id', $id)->first();
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('infografis', 'public');
            if ($infografis->gambar && file_exists(storage_path('app/public/' . $infografis->gambar))) {
                Storage::delete('public/' . $infografis->gambar);
                $file = $request->file('gambar')->store('infografis', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $infografis->gambar;
        }

        $slug = Str::slug($request->title);
        $infografis->update([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'type_infografis' => $request->input('type_infografis'),
            'tanggal' => $request->input('tanggal'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file
        ]);

        return redirect()->route('dashboard_infografis')->with('status', 'Selamat data infografis berhasil diperbarui');
    }

    public function destroy_infografis($id)
    {
        $delete = Infografis::find($id);
        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
