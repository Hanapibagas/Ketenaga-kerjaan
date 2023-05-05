<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataStaf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DataStafController extends Controller
{
    public function index_staf()
    {
        $staf = DataStaf::all();
        return view('components.dashboard.data-staf.index', compact('staf'));
    }

    public function create_staf()
    {
        return view('components.dashboard.data-staf.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required',
            'tempat_lahir' => 'required',
            'tempat_melaksanakan_tugas' => 'required',
            'pangkat' => 'required',
            'golongan_ruang' => 'required',
            'pendidikan' => 'required',
            'tahun_lulus' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'etmis' => 'required',
            'asal_daerah' => 'required',
        ], $message);

        DataStaf::create([
            'nama' => $request->input('nama'),
            'nip' => $request->input('nip'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tempat_melaksanakan_tugas' => $request->input('tempat_melaksanakan_tugas'),
            'pangkat' => $request->input('pangkat'),
            'golongan_ruang' => $request->input('golongan_ruang'),
            'pendidikan' => $request->input('pendidikan'),
            'tahun_lulus' => $request->input('tahun_lulus'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'etmis' => $request->input('etmis'),
            'asal_daerah' => $request->input('asal_daerah'),
            'jabatan' => $request->input('jabatan'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
        ]);

        return redirect()->route('index_staf')->with('status', 'Selamat data staf berhasil ditambahkan');
    }

    public function edit_staf(Request $request, $id)
    {
        $staf = DataStaf::where('id', $id)->first();
        return view('components.dashboard.data-staf.update', compact('staf'));
    }

    public function update_staf(Request $request, $id)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required',
            'tempat_lahir' => 'required',
            'tempat_melaksanakan_tugas' => 'required',
            'pangkat' => 'required',
            'golongan_ruang' => 'required',
            'pendidikan' => 'required',
            'tahun_lulus' => 'required',
            'agama' => 'required',
            'etmis' => 'required',
            'asal_daerah' => 'required',
        ], $message);

        $staf = DataStaf::where('id', $id)->first();

        $staf->update([
            'nama' => $request->input('nama'),
            'nip' => $request->input('nip'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tempat_melaksanakan_tugas' => $request->input('tempat_melaksanakan_tugas'),
            'pangkat' => $request->input('pangkat'),
            'golongan_ruang' => $request->input('golongan_ruang'),
            'pendidikan' => $request->input('pendidikan'),
            'tahun_lulus' => $request->input('tahun_lulus'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'etmis' => $request->input('etmis'),
            'asal_daerah' => $request->input('asal_daerah'),
            'keterangan' => $request->input('keterangan'),
            'jabatan' => $request->input('jabatan'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
        ]);

        return redirect()->route('index_staf')->with('status', 'Selamat data staf berhasil diperbarui');
    }

    public function details_data_staf(Request $request, $id)
    {
        $staf = DataStaf::where('id', $id)->first();
        return view('components.dashboard.data-staf.details_staf', compact('staf'));
    }

    public function destroy_staf($id)
    {
        $delete = DataStaf::find($id);
        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data staf berhasil dihapus']);
    }
}
