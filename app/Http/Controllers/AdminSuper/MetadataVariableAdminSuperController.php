<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\MetaData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MetadataVariableAdminSuperController extends Controller
{
    public function index_metadata()
    {
        $metadata = MetaData::all();
        return view('components.super-admin.metadata-variable.index', compact('metadata'));
    }

    public function create_metadata()
    {
        return view('components.super-admin.metadata-variable.create');
    }

    public function store_metadata(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama_master_data' => 'required',
            'deskripsi' => 'required',
        ], $message);

        if ($request->file('file_data')) {
            $file = $request->file('file_data')->store('metad-data', 'public');
        }

        MetaData::create([
            'nama_master_data' => $request->input('nama_master_data'),
            'deskripsi' => $request->input('deskripsi'),
            'file_data' => $file,
        ]);

        return redirect()->route('index_metadata')->with('status', 'Selamat data metadata berhasil ditambahkan');
    }

    public function edit_metadata(Request $request, $id)
    {
        $metadata = MetaData::where('id', $id)->first();
        return view('components.super-admin.metadata-variable.update', compact('metadata'));
    }

    public function update_metadata(Request $request, $id)
    {
        $metadata = MetaData::where('id', $id)->first();
        if ($request->file('file_data')) {
            $file = $request->file('file_data')->store('metad-data', 'public');
            if ($metadata->file_data && file_exists(storage_path('app/public/' . $metadata->file_data))) {
                Storage::delete('public/' . $metadata->file_data);
                $file = $request->file('file_data')->store('metad-data', 'public');
            }
        }

        if ($request->file('file_data') === null) {
            $file = $metadata->file_data;
        }

        $metadata->update([
            'nama_master_data' => $request->input('nama_master_data'),
            'deskripsi' => $request->input('deskripsi'),
            'file_data' => $file,
        ]);

        return redirect()->route('index_metadata')->with('status', 'Selamat data metadata berhasil diperbarui');
    }

    public function destroy_metadata($id)
    {
        $delete = MetaData::find($id);
        if ($delete->file_data && file_exists(storage_path('app/public/' . $delete->file_data))) {
            Storage::delete('public/' . $delete->file_data);
        }

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }
}
