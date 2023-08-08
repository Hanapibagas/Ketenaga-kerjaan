<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\InformasiPublik;
use App\Models\Logo;
use App\Models\PengajuanKeberatanPublik;
use App\Models\PrakataKepalaDinas;
use App\Models\ProfieDinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class SettingWebController extends Controller
{
    public function getIndexlogo()
    {
        $logo = Logo::all();
        return view('components.dashboard.setting.index-logo', compact('logo'));
    }

    public function getIndexBanner()
    {
        $banner = Banner::all();
        return view('components.dashboard.setting.index-banner', compact('banner'));
    }

    public function getIndexPrakata()
    {
        $prakata = PrakataKepalaDinas::all();
        return view('components.dashboard.setting.index-prakata-kepala-dinas', compact('prakata'));
    }

    public function getIndexProfile()
    {
        $prakata = ProfieDinas::all();
        return view('components.dashboard.setting.index-prakata-profile-dinas', compact('prakata'));
    }

    public function getIndexFooter()
    {
        $banner = Footer::all();
        return view('components.dashboard.setting.index-footer', compact('banner'));
    }

    public function getIndexPengajuanKeberatan()
    {
        $keberatan = PengajuanKeberatanPublik::all();
        return view('components.dashboard.setting.index-pengajuan-keberatan', compact('keberatan'));
    }

    public function getIndexInformasiPublik()
    {
        $informasi = InformasiPublik::all();
        return view('components.dashboard.setting.index-informasi-publik', compact('informasi'));
    }

    public function getUpdateInformasiPublik(Request $request, $id)
    {
        $keberatan = InformasiPublik::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('informasi-publik', 'public');
            if ($keberatan->gambar && file_exists(storage_path('app/public/' . $keberatan->gambar))) {
                Storage::delete('public/' . $keberatan->gambar);
                $file = $request->file('gambar')->store('informasi-publik', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $keberatan->gambar;
        }

        $keberatan->update([
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file
        ]);

        return redirect()->back()->with('status', 'Selamat setting logo berhasil diperbarui');
    }

    public function getUpdatePengajuanKeberatan(Request $request, $id)
    {
        $keberatan = PengajuanKeberatanPublik::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('pengajuann-keberatan', 'public');
            if ($keberatan->gambar && file_exists(storage_path('app/public/' . $keberatan->gambar))) {
                Storage::delete('public/' . $keberatan->gambar);
                $file = $request->file('gambar')->store('pengajuann-keberatan', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $keberatan->gambar;
        }

        $keberatan->update([
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $file
        ]);

        return redirect()->back()->with('status', 'Selamat setting logo berhasil diperbarui');
    }

    public function getUpdateFooter(Request $request, $id)
    {
        $gambar = Footer::where('id', $id)->first();

        $gambar->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'instagram' => $request->input('instagram'),
            'link_email' => $request->input('link_email'),
            'link_instagram' => $request->input('link_instagram'),
        ]);

        return redirect()->back()->with('status', 'Selamat setting footer berhasil diperbarui');
    }

    public function getUpdateProfile(Request $request, $id)
    {
        $gambar = ProfieDinas::where('id', $id)->first();

        $gambar->update([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->back()->with('status', 'Selamat setting profile berhasil diperbarui');
    }

    public function getUpdatePrakata(Request $request, $id)
    {
        $gambar = PrakataKepalaDinas::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('kepala-dinas', 'public');
            if ($gambar->gambar && file_exists(storage_path('app/public/' . $gambar->gambar))) {
                Storage::delete('public/' . $gambar->gambar);
                $file = $request->file('gambar')->store('kepala-dinas', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $gambar->gambar;
        }

        $gambar->update([
            'text' => $request->input('text'),
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'gambar' => $file,
        ]);

        return redirect()->back()->with('status', 'Selamat setting prakata kepala dinas berhasil diperbarui');
    }

    public function getUpdateBanner(Request $request, $id)
    {
        $gambar = Banner::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('banner', 'public');
            if ($gambar->gambar && file_exists(storage_path('app/public/' . $gambar->gambar))) {
                Storage::delete('public/' . $gambar->gambar);
                $file = $request->file('gambar')->store('banner', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $gambar->gambar;
        }

        $gambar->update([
            'gambar' => $file
        ]);

        return redirect()->back()->with('status', 'Selamat setting banner berhasil diperbarui');
    }

    public function getUpdate(Request $request, $id)
    {
        $logo = Logo::where('id', $id)->first();

        if ($request->file('logo')) {
            $file = $request->file('logo')->store('logo', 'public');
            if ($logo->logo && file_exists(storage_path('app/public/' . $logo->logo))) {
                Storage::delete('public/' . $logo->logo);
                $file = $request->file('logo')->store('logo', 'public');
            }
        }

        if ($request->file('logo') === null) {
            $file = $logo->logo;
        }

        $logo->update([
            'nama' => $request->input('nama'),
            'logo' => $file
        ]);

        return redirect()->back()->with('status', 'Selamat setting logo berhasil diperbarui');
    }
}
