<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use App\Models\DetailsDataset;
use App\Models\TheadDetailsDataset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DataSeAdminSupertController extends Controller
{
    public function index_dataset()
    {
        $dataset = DataSet::all();
        return view('components.super-admin.data-set.index', compact('dataset'));
    }

    public function create_dataset()
    {
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        return view('components.super-admin.data-set.create', compact('user'));
    }

    public function store_dataset(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'nama_dataset' => 'required',
            'role' => 'required',
            'deskripsi' => 'required',
        ], $message);

        DataSet::create([
            'nama_dataset' => $request->input('nama_dataset'),
            'role_id' => $request->input('role'),
            'thead_html' => $request->input('deskripsi'),
        ]);

        return redirect()->route('index_dataset')->with('status', 'Selamat dataset berhasil ditambahkan');
    }

    public function edit_dataset(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        $user = User::where('id', '>', 2)->whereIn('roles', ['upt', 'kab/kota'])->get();
        return view('components.super-admin.data-set.update', compact('dataset', 'user'));
    }

    public function update_dataset(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();

        $slug = Str::slug($request->nama_dataset);
        $dataset->update([
            'nama_dataset' => $request->input('nama_dataset'),
            'kategori' => $request->input('kategori'),
            'opd' => $request->input('opd'),
            'satuan' => $request->input('satuan'),
            'user_id' => $request->input('user_id'),
            'slug' => $slug,
        ]);

        return redirect()->route('index_dataset')->with('status', 'Selamat dataset berhasil diperbarui');
    }

    public function destroy_dataset($id)
    {
        $delete = DataSet::find($id);

        $delete->delete();

        return response()->json(['status' => 'Selamat data infografis berhasil dihapus']);
    }

    public function details_dataset_admin_super(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        $detailsdataset = DetailsDataset::all();
        $thead = TheadDetailsDataset::first();

        return view('components.super-admin.data-set.details', compact('dataset', 'detailsdataset', 'thead'));
    }

    public function filter_dataset_admin_super(Request $request, $id)
    {
        $tahun = $request->tahun;

        $dataset = DataSet::where('id', $id)->first();
        $detailsdataset = DetailsDataset::whereYear('tahun', $tahun)->where('dataset_id', $id)->get();
        $thead = TheadDetailsDataset::first();

        return view('components.super-admin.data-set.details', compact('dataset', 'detailsdataset', 'thead'));
    }

    public function getCreateVariable(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();
        return view('components.super-admin.data-set.variable', compact('dataset'));
    }

    public function getPostDetails(Request $request)
    {
        DetailsDataset::create([
            'dataset_id' => $request->input('dataset_id'),
            'variable' => $request->input('variable'),
            'tahun' => $request->input('tahun'),
        ]);

        return redirect()->route('index_dataset')->with('status', 'Selamat dataset berhasil ditambahkan');
    }

    public function getUpdateThead(Request $request, $id)
    {
        $thead = TheadDetailsDataset::where('id', $id)->first();

        $thead->update([
            'variabale' => $request->input('variabale'),
            'laki' => $request->input('laki'),
            'tahun' => $request->input('tahun'),
            'perempuan' => $request->input('perempuan'),
        ]);

        return redirect()->back()->with('status', 'Selamat tabel details dataset berhasil diperbarui');
    }

    public function getUpdateStatus(Request $request, $id)
    {
        $dataset = DataSet::where('id', $id)->first();

        $dataset->update([
            'status' => $request->input('status')
        ]);

        return redirect()->back()->with('status', 'Selamat dataset berhasil dipublikasikan');
    }
}
