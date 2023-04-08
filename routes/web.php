<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
