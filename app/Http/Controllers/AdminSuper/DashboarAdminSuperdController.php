<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use App\Models\Iku;
use App\Models\Lppd;
use App\Models\PengukuranKinerja;
use App\Models\PermohonanInformasiPublik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboarAdminSuperdController extends Controller
{
    public function index_admin_super()
    {
        // dataset
        $balaipelatihankerja = DataSet::where('role_id', '3')->count();
        $pengawasanketenagarkerjaanwilayahI = DataSet::where('role_id', '4')->count();
        $pengawasanketenagarkerjaanwilayahII = DataSet::where('role_id', '5')->count();
        $pengawasanketenagarkerjaanwilayahIII = DataSet::where('role_id', '6')->count();
        $pengawasanketenagarkerjaanwilayahIV = DataSet::where('role_id', '7')->count();
        $bidangpengembanganketenagakerjaan = DataSet::where('role_id', '8')->count();
        $bidangpengawasanketenagakerjaan = DataSet::where('role_id', '9')->count();
        $bidanghubunganindustrial = DataSet::where('role_id', '10')->count();
        $bidangketransmigrasi = DataSet::where('role_id', '11')->count();
        $sekretariat = DataSet::where('role_id', '12')->count();
        // IKU
        $balaipelatihankerjaIku = Iku::where('role_id', '3')->count();
        $pengawasanketenagarkerjaanwilayahIIku = Iku::where('role_id', '4')->count();
        $pengawasanketenagarkerjaanwilayahIIIku = Iku::where('role_id', '5')->count();
        $pengawasanketenagarkerjaanwilayahIIIIku = Iku::where('role_id', '6')->count();
        $pengawasanketenagarkerjaanwilayahIVIku = Iku::where('role_id', '7')->count();
        $bidangpengembanganketenagakerjaanIku = Iku::where('role_id', '8')->count();
        $bidangpengawasanketenagakerjaanIku = Iku::where('role_id', '9')->count();
        $bidanghubunganindustrialIku = Iku::where('role_id', '10')->count();
        $bidangketransmigrasiIku = Iku::where('role_id', '11')->count();
        $sekretariatIku = Iku::where('role_id', '12')->count();
        // LPPD
        $balaipelatihankerjaLppd = Lppd::where('role_id', '3')->count();
        $pengawasanketenagarkerjaanwilayahILppd = Lppd::where('role_id', '4')->count();
        $pengawasanketenagarkerjaanwilayahIILppd = Lppd::where('role_id', '5')->count();
        $pengawasanketenagarkerjaanwilayahIIILppd = Lppd::where('role_id', '6')->count();
        $pengawasanketenagarkerjaanwilayahIVLppd = Lppd::where('role_id', '7')->count();
        $bidangpengembanganketenagakerjaanLppd = Lppd::where('role_id', '8')->count();
        $bidangpengawasanketenagakerjaanLppd = Lppd::where('role_id', '9')->count();
        $bidanghubunganindustrialLppd = Lppd::where('role_id', '10')->count();
        $bidangketransmigrasiLppd = Lppd::where('role_id', '11')->count();
        $sekretariatLppd = Lppd::where('role_id', '12')->count();
        // PengkuranKinerja
        $balaipelatihankerjaPengkuranKinerja = PengukuranKinerja::where('role_id', '3')->count();
        $pengawasanketenagarkerjaanwilayahIPengkuranKinerja = PengukuranKinerja::where('role_id', '4')->count();
        $pengawasanketenagarkerjaanwilayahIIPengkuranKinerja = PengukuranKinerja::where('role_id', '5')->count();
        $pengawasanketenagarkerjaanwilayahIIIPengkuranKinerja = PengukuranKinerja::where('role_id', '6')->count();
        $pengawasanketenagarkerjaanwilayahIVPengkuranKinerja = PengukuranKinerja::where('role_id', '7')->count();
        $bidangpengembanganketenagakerjaanPengkuranKinerja = PengukuranKinerja::where('role_id', '8')->count();
        $bidangpengawasanketenagakerjaanPengkuranKinerja = PengukuranKinerja::where('role_id', '9')->count();
        $bidanghubunganindustrialPengkuranKinerja = PengukuranKinerja::where('role_id', '10')->count();
        $bidangketransmigrasiPengkuranKinerja = PengukuranKinerja::where('role_id', '11')->count();
        $sekretariatPengkuranKinerja = PengukuranKinerja::where('role_id', '12')->count();

        return view('components.super-admin.dashboard', compact(
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
