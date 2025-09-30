<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;

/*
|--------------------------------------------------------------------------
| Halaman Pengunjung (Frontend)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'indexPublic'])->name('tentang');

// Rute untuk menampilkan semua berita (halaman daftar berita)
Route::get('/berita', [BeritaController::class, 'indexPublic'])->name('berita.index');

// PENTING: Rute baru untuk menampilkan satu berita secara spesifik (halaman detail)
Route::get('/berita/{berita}', [BeritaController::class, 'showPublic'])->name('berita.show');

// Rute untuk menampilkan halaman galeri
Route::get('/galery', [GaleryController::class, 'indexPublic'])->name('galery.index');

// Rute untuk menampilkan dan mengirim form kontak
Route::get('/kontak', [KontakController::class, 'create'])->name('kontak.index'); // <-- PERBAIKAN DI SINI
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store'); // <-- PERBAIKAN DI SINI


/*
|--------------------------------------------------------------------------
| Halaman Otentikasi (Login & Register)
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Halaman Admin (Backend / Dashboard)
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // CRUD Berita (tanpa show karena showPublic sudah ada)
    Route::resource('berita', BeritaController::class)
        ->except('show')
        ->parameters(['berita' => 'berita']);

    // CRUD Resource
    Route::resource('tentang', TentangController::class);


    // CRUD Galeri
    Route::resource('galery', GaleryController::class)->except(['edit', 'update', 'show']);

    // CRUD Kontak
    Route::resource('kontak', KontakController::class)->except(['create', 'store']);
});
