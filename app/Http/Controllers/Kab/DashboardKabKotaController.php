<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataSet;
use App\Models\Iku;
use App\Models\Lppd;
use App\Models\PengukuranKinerja;
use Illuminate\Support\Facades\Auth;

class DashboardKabKotaController extends Controller
{
    public function dashboard_kab()
    {
        $user = Auth::user();
        // dataset
        $balaipelatihankerja = DataSet::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahI = DataSet::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahII = DataSet::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIII = DataSet::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIV = DataSet::where('role_id', $user->id)->count();
        $bidangpengembanganketenagakerjaan = DataSet::where('role_id', $user->id)->count();
        $bidangpengawasanketenagakerjaan = DataSet::where('role_id', $user->id)->count();
        $bidanghubunganindustrial = DataSet::where('role_id', $user->id)->count();
        $bidangketransmigrasi = DataSet::where('role_id', $user->id)->count();
        $sekretariat = DataSet::where('role_id', $user->id)->count();
        // IKU
        $balaipelatihankerjaIku = Iku::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIIku = Iku::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIIIku = Iku::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIIIIku = Iku::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIVIku = Iku::where('role_id', $user->id)->count();
        $bidangpengembanganketenagakerjaanIku = Iku::where('role_id', $user->id)->count();
        $bidangpengawasanketenagakerjaanIku = Iku::where('role_id', $user->id)->count();
        $bidanghubunganindustrialIku = Iku::where('role_id', $user->id)->count();
        $bidangketransmigrasiIku = Iku::where('role_id', $user->id)->count();
        $sekretariatIku = Iku::where('role_id', $user->id)->count();
        // LPPD
        $balaipelatihankerjaLppd = Lppd::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahILppd = Lppd::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIILppd = Lppd::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIIILppd = Lppd::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIVLppd = Lppd::where('role_id', $user->id)->count();
        $bidangpengembanganketenagakerjaanLppd = Lppd::where('role_id', $user->id)->count();
        $bidangpengawasanketenagakerjaanLppd = Lppd::where('role_id', $user->id)->count();
        $bidanghubunganindustrialLppd = Lppd::where('role_id', $user->id)->count();
        $bidangketransmigrasiLppd = Lppd::where('role_id', $user->id)->count();
        $sekretariatLppd = Lppd::where('role_id', $user->id)->count();
        // PengkuranKinerja
        $balaipelatihankerjaPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIIPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIIIPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $pengawasanketenagarkerjaanwilayahIVPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $bidangpengembanganketenagakerjaanPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $bidangpengawasanketenagakerjaanPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $bidanghubunganindustrialPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $bidangketransmigrasiPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();
        $sekretariatPengkuranKinerja = PengukuranKinerja::where('role_id', $user->id)->count();

        return view('components.admin-kab.dashboard', compact(
            //dataset
            'balaipelatihankerja',
            'pengawasanketenagarkerjaanwilayahI',
            'pengawasanketenagarkerjaanwilayahII',
            'pengawasanketenagarkerjaanwilayahIII',
            'pengawasanketenagarkerjaanwilayahIV',
            'bidangpengembanganketenagakerjaan',
            'bidangpengawasanketenagakerjaan',
            'bidanghubunganindustrial',
            'bidangketransmigrasi',
            'sekretariat',
            // iku
            'balaipelatihankerjaIku',
            'pengawasanketenagarkerjaanwilayahIIku',
            'pengawasanketenagarkerjaanwilayahIIIku',
            'pengawasanketenagarkerjaanwilayahIIIIku',
            'pengawasanketenagarkerjaanwilayahIVIku',
            'bidangpengembanganketenagakerjaanIku',
            'bidangpengawasanketenagakerjaanIku',
            'bidanghubunganindustrialIku',
            'bidangketransmigrasiIku',
            'sekretariatIku',
            // Lppd
            'balaipelatihankerjaLppd',
            'pengawasanketenagarkerjaanwilayahILppd',
            'pengawasanketenagarkerjaanwilayahIILppd',
            'pengawasanketenagarkerjaanwilayahIIILppd',
            'pengawasanketenagarkerjaanwilayahIVLppd',
            'bidangpengembanganketenagakerjaanLppd',
            'bidangpengawasanketenagakerjaanLppd',
            'bidanghubunganindustrialLppd',
            'bidangketransmigrasiLppd',
            'sekretariatLppd',
            // Pengukuran
            'balaipelatihankerjaPengkuranKinerja',
            'pengawasanketenagarkerjaanwilayahIPengkuranKinerja',
            'pengawasanketenagarkerjaanwilayahIIPengkuranKinerja',
            'pengawasanketenagarkerjaanwilayahIIIPengkuranKinerja',
            'pengawasanketenagarkerjaanwilayahIVPengkuranKinerja',
            'bidangpengembanganketenagakerjaanPengkuranKinerja',
            'bidangpengawasanketenagakerjaanPengkuranKinerja',
            'bidanghubunganindustrialPengkuranKinerja',
            'bidangketransmigrasiPengkuranKinerja',
            'sekretariatPengkuranKinerja',
        ));
    }
}
