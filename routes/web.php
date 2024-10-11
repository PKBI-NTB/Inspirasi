<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
