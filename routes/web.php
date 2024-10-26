<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/beranda', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/detailberita', function () {
    return view('detailberita');
})->name('detailberita');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/program', function () {
    $programs = [
        [
            'title' => 'Pengembangan Masyarakat',
            'location' => 'Bandung, Jawa Barat',
            'status' => 'Sedang Berlangsung',
            'image' => 'program/Rectangle 34625691.png',
        ],
        [
            'title' => 'Pengembangan Ekonomi',
            'location' => 'Yogyakarta, DIY',
            'status' => 'Telah Selesai',
            'image' => 'program/Rectangle 34625691.png',
        ],
        [
            'title' => 'Pengembangan Kesehatan',
            'location' => 'Malang, Jawa Timur',
            'status' => 'Sedang Berlangsung',
            'image' => 'program/Rectangle 34625691.png',
        ],
        [
            'title' => 'Pengembangan Pendidikan',
            'location' => 'Surabaya, Jawa Timur',
            'status' => 'Telah Selesai',
            'image' => 'program/Rectangle 34625691.png',
        ],
        [
            'title' => 'Pengembangan Sosial',
            'location' => 'Semarang, Jawa Tengah',
            'status' => 'Sedang Berlangsung',
            'image' => 'program/Rectangle 34625691.png',
        ],
        [
            'title' => 'Pengembangan Kemanusiaan',
            'location' => 'Jakarta, DKI Jakarta',
            'status' => 'Telah Selesai',
            'image' => 'program/Rectangle 34625691.png',
        ],
        [
            'title' => 'Pengembangan Lingkungan',
            'location' => 'Medan, Sumatera Utara',
            'status' => 'Sedang Berlangsung',
            'image' => 'program/Rectangle 34625691.png',
        ],
        [
            'title' => 'Pengembangan Kebudayaan',
            'location' => 'Makassar, Sulawesi Selatan',
            'status' => 'Telah Selesai',
            'image' => 'program/Rectangle 34625691.png',
        ],
    ];
    return view('program.index', compact('programs'));
})->name('program');

Route::get('/program/detail', function () {
    return view('program.detail');
})->name('program.detail');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
