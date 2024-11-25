<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DetailBeritaController;
use App\Http\Controllers\ProgramController;

Route::get('/', function () {
    return view('beranda.welcome');
})->name('welcome');

Route::get('/beranda', function () {
    return view('beranda.welcome');
})->name('welcome');

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Route::get('/berita', function () {
    return view('berita.berita');
})->name('berita');

Route::get('/detailberita', function () {
    return view('berita.detailberita');
})->name('detailberita');

Route::get('/layanan', function () {
    return view('layanan.layanan');
})->name('layanan');

Route::get('/program', function () {
    return view('program.index');
})->name('program');

Route::get('/program/detail', function () {
    return view('program.detail');
})->name('program.detail');

Auth::routes();

//home admin
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//berita
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('berita', BeritaController::class);
});

Route::get('/detailberita/{id}', [BeritaController::class, 'publicShow'])->name('detailberita.show');

//program
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('program', ProgramController::class);
});

Route::get('/program/detail/{id}', [ProgramController::class, 'publicShow'])->name('detail.show');