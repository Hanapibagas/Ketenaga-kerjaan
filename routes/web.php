<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InfografisController;
use App\Http\Controllers\HomeController;
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
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');

Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index_dashboard'])->name('index_dashboard');

    //
    Route::get('/infografis', [InfografisController::class, 'dashboard_infografis'])->name('dashboard_infografis');
    Route::get('/infografis/create', [InfografisController::class, 'create_infografis'])->name('create_infografis');
});
