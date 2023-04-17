<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataStafController;
use App\Http\Controllers\Admin\InfografisController;
use App\Http\Controllers\Admin\InformasiBerkalaController;
use App\Http\Controllers\Admin\InformasiSertaMertaController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\UnduhdataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Kab\KabKotaController;
use App\Http\Controllers\Kab\PermintaanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index_home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile_home');
Route::get('/ppid', [HomeController::class, 'ppid'])->name('ppid_home');
//
Route::get('/data', [HomeController::class, 'index_dataset'])->name('index_dataset');
Route::get('/data/guest', [HomeController::class, 'permintaan_data_guest'])->name('permintaan_data_guest');
Route::get('/data/auth', [HomeController::class, 'permintaan_data_auth'])->name('permintaan_data_auth');
Route::get('/data/unduh-data', [HomeController::class, 'unduh_data'])->name('unduh_data');
Route::get('/data/unduh-data/{slug}', [HomeController::class, 'details_dataset'])->name('details_dataset');
Route::get('/data/data-integrasi', [HomeController::class, 'data_integrasi'])->name('data_integrasi');
//
Route::get('/infografis', [HomeController::class, 'index_infografis'])->name('index_infografis');
Route::get('/infografis/{slug}', [HomeController::class, 'infografis_details'])->name('infografis_details');
//
Route::get('/berita', [HomeController::class, 'index_berita'])->name('index_berita');
Route::get('/berita/{slug}', [HomeController::class, 'details_berita'])->name('details_berita');
//
Route::get('/informasi-public', [HomeController::class, 'index_informasi_public'])->name('index_informasi_public');
//
Route::get('/publikasi', [HomeController::class, 'index_publikasi'])->name('index_publikasi');
Route::get('/publikasi/{slug}', [HomeController::class, 'details_pulikasi'])->name('details_pulikasi');
//
Route::get('/simpas', [HomeController::class, 'simpas'])->name('simpas');
Route::get('/permohonan-informasi-publik', [HomeController::class, 'permohonan_publik'])->name('permohonan_publik');
Route::get('/permohonan-keberatan-informasi-publik', [HomeController::class, 'keberatan_publik'])->name('keberatan_publik');
Route::get('/keran-sulsel', [HomeController::class, 'keran_sulsel'])->name('keran_sulsel');
Route::get('/lapor', [HomeController::class, 'lapor'])->name('lapor');
//
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');

Auth::routes();

// super admin
Route::middleware('auth', 'checkroll:oprator')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index_dashboard'])->name('index_dashboard');
    //
    Route::get('/serta-merta-oprator', [InformasiSertaMertaController::class, 'index_serta_merta'])->name('index_serta_merta');
    Route::get('/serta-merta-oprator/create', [InformasiSertaMertaController::class, 'create_serta_merta'])->name('create_serta_merta');
    Route::post('/serta-merta-oprator/create/post', [InformasiSertaMertaController::class, 'store'])->name('store_serta_merta');
    Route::get('/serta-merta-oprator/update/{id}', [InformasiSertaMertaController::class, 'edit_serta_merta'])->name('edit_serta_merta');
    Route::put('/serta-merta-oprator/create/update/{id}', [InformasiSertaMertaController::class, 'update_serta_merta'])->name('update_serta_merta');
    Route::delete('/serta-merta-oprator/delete/{id}', [InformasiSertaMertaController::class, 'destroy_serta_merta'])->name('destroy_serta_merta');
    //
    Route::get('/berkala-oprator', [InformasiBerkalaController::class, 'index_berkala'])->name('index_berkala');
    Route::get('/berkala-oprator/create', [InformasiBerkalaController::class, 'create_berkala'])->name('create_berkala');
    Route::post('/berkala-oprator/create/post', [InformasiBerkalaController::class, 'store'])->name('store_berkala');
    Route::get('/berkala-oprator/update/{id}', [InformasiBerkalaController::class, 'edit_berkala'])->name('edit_berkala');
    Route::put('/berkala-oprator/create/update/{id}', [InformasiBerkalaController::class, 'update_berkala'])->name('update_berkala');
    Route::delete('/berkala-oprator/delete/{id}', [InformasiBerkalaController::class, 'destroy_berkala'])->name('destroy_berkala');
    //
    Route::get('/staf-oprator', [DataStafController::class, 'index_staf'])->name('index_staf');
    Route::get('/staf-oprator/create', [DataStafController::class, 'create_staf'])->name('create_staf');
    Route::post('/staf-oprator/create/post', [DataStafController::class, 'store'])->name('store_staf');
    Route::get('/staf-oprator/update/{id}', [DataStafController::class, 'edit_staf'])->name('edit_staf');
    Route::put('/staf-oprator/create/update/{id}', [DataStafController::class, 'update_staf'])->name('update_staf');
    Route::delete('/staf-oprator/delete/{id}', [DataStafController::class, 'destroy_staf'])->name('destroy_staf');
    //
    Route::get('/infografis-oprator', [InfografisController::class, 'dashboard_infografis'])->name('dashboard_infografis');
    Route::get('/infografis-oprator/create', [InfografisController::class, 'create_infografis'])->name('create_infografis');
    Route::post('/infografis-oprator/create/post', [InfografisController::class, 'store'])->name('store_infografis');
    Route::get('/infografis-oprator/update/{id}', [InfografisController::class, 'edit_infografis'])->name('edit_infografis');
    Route::put('/infografis-oprator/create/update/{id}', [InfografisController::class, 'update_inforgrafis'])->name('update_inforgrafis');
    Route::delete('/infografis-oprator/delete/{id}', [InfografisController::class, 'destroy_infografis'])->name('destroy_infografis');
    //
    Route::get('/berita-oprator', [BeritaController::class, 'index_berita'])->name('dashboard_berita');
    Route::get('/berita-oprator/create', [BeritaController::class, 'create_berita'])->name('create_berita');
    Route::post('/berita-oprator/create/post', [BeritaController::class, 'store'])->name('store_berita');
    Route::get('/berita-oprator/update/{id}', [BeritaController::class, 'edit_berita'])->name('edit_berita');
    Route::put('/berita-oprator/create/update/{id}', [BeritaController::class, 'update_berita'])->name('update_berita');
    Route::delete('/berita-oprator/delete/{id}', [BeritaController::class, 'destroy_berita'])->name('destroy_berita');
    //
    Route::get('/publikasi-oprator', [PublikasiController::class, 'index_publikasi'])->name('dashboard_publikasi');
    Route::get('/publikasi-oprator/create', [PublikasiController::class, 'create_publikasi'])->name('create_publikasi');
    Route::post('/publikasi-oprator/create/post', [PublikasiController::class, 'store'])->name('store_publikasi');
    Route::get('/publikasi-oprator/update/{id}', [PublikasiController::class, 'edit_publikasi'])->name('edit_publikasi');
    Route::put('/publikasi-oprator/create/update/{id}', [PublikasiController::class, 'update_publikasi'])->name('update_publikasi');
    Route::delete('/publikasi-oprator/delete/{id}', [PublikasiController::class, 'destroy_publikasi'])->name('destroy_publikasi');
    //
    Route::get('/unduhdata-oprator', [UnduhdataController::class, 'index_unduhdata'])->name('dashboard_unduhdata');
    Route::get('/unduhdata-oprator/create', [UnduhdataController::class, 'create_unduhdata'])->name('create_unduhdata');
    Route::post('/unduhdata-oprator/create/post', [UnduhdataController::class, 'store'])->name('store_unduhdata');
    Route::get('/unduhdata-oprator/update/{id}', [UnduhdataController::class, 'edit_unduhdata'])->name('edit_unduhdata');
    Route::put('/unduhdata-oprator/create/update/{id}', [UnduhdataController::class, 'update_unduhdata'])->name('update_unduhdata');
    Route::delete('/unduhdata-oprator/delete/{id}', [UnduhdataController::class, 'destroy_unduhdata'])->name('destroy_unduhdata');
});

//admin kab/kota
Route::middleware('auth', 'checkroll:admin')->group(function () {
    Route::get('/admin', [KabKotaController::class, 'index_kab'])->name('dashboard_kab');
    //
    Route::get('/admin/permintaan-kab', [PermintaanController::class, 'index_kab'])->name('index_kab');
});
