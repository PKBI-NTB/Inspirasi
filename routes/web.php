<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DetailBeritaController;
use App\Http\Controllers\IsuController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProfileController;
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
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//berita
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('berita', BeritaController::class);
});

Route::get('/detailberita/{id}', [BeritaController::class, 'publicShow'])->name('detailberita.show');

//program
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('program', ProgramController::class);
});

Route::get('/program/detail/{id}', [ProgramController::class, 'publicShow'])->name('detail.show');

//mitra
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('mitra', MitraController::class);
});

//album
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('album', AlbumController::class);
});

//profile
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('profile', ProfileController::class);
});

//kontak
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('kontak', KontakController::class);
});

//isu
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('isu', IsuController::class);
});

Route::get('/isu/detail/{id}', [IsuController::class, 'publicShow'])->name('detailisu.show');

// Auth::routes([
//     'register' => false // Nonaktifkan rute default register
// ]);

// Route::get('/register', function () {
//     return view('auth.register');
// })->middleware('auth')->name('register');