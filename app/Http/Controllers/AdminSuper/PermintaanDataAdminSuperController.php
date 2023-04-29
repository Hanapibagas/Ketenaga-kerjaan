<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;

class PermintaanDataAdminSuperController extends Controller
{
    public function index_permintaan()
    {
        $permintaan = PermohonanInformasiPublik::all();
        return view('components.super-admin.permintaan-data.index', compact('permintaan'));
    }

    public function edit_permintaan(Request $request, $id)
    {
        $permintaan = PermohonanInformasiPublik::where('id', $id)->first();
        return view('components.super-admin.permintaan-data.update', compact('permintaan'));
    }

    public function update_permintaan(Request $request, $id)
    {
        $permintaan = PermohonanInformasiPublik::where('id', $id)->first();

        if (
            $request->input('status') == 'Telah DiTerima'
        ) {
            $permintaan->update([
                "status" => $request->input('status')
            ]);
            Mail::to($permintaan->email)->send(new SendEmail($request->status, "Permintaan Data Anda Telah DiTerima!!", $permintaan->nama));
        }

        if (
            $request->input('status') == 'Mohon Maaf Permintaan Anda Di Tolak'
        ) {
            $permintaan->update([
                "status" => $request->input('status')
            ]);
            Mail::to($permintaan->email)->send(new SendEmail($request->status, "Permintaan Data Anda Telah DiTerima!!", $permintaan->nama));
        }

        return redirect()->route('index_permintaan')->with('status', 'Selamat permintaan data masyrakat berhasil di');
    }
}
