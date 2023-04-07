<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index_home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile_home');
Route::get('/ppid', [HomeController::class, 'ppid'])->name('ppid_home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
