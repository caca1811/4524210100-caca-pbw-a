<?php

use Illuminate\Support\Facades\Route;

// 1. Rute Publik (Tugas 3)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('contact');
});

// 2. Rute Terproteksi Breeze (Tugas 4)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');
});

require __DIR__.'/auth.php';