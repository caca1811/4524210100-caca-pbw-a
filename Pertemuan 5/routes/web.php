<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PesanTamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;

// Halaman Publik
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/kegiatan', [KegiatanController::class, 'indexPublic'])->name('kegiatan.index');
Route::get('/buku-tamu', [PesanTamuController::class, 'create'])->name('buku-tamu.create');
Route::post('/buku-tamu', [PesanTamuController::class, 'store'])->name('buku-tamu.store');

// Route Bawaan Breeze untuk Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Halaman Admin / Dashboard (Dilindungi Autentikasi / Breeze)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Resource Controller untuk Manajemen Data
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('pesan-tamu', PesanTamuController::class)->except(['create', 'store']);
    Route::resource('setting', SettingController::class)->except(['show', 'create', 'store', 'destroy']);
});

require __DIR__.'/auth.php';