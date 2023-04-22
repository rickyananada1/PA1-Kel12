<?php

use App\Http\Controllers\Admin\BlogKategoriController;
use \App\Http\Controllers\Admin\DestinasiKategoriController;
use \App\Http\Controllers\Admin\GalleryController;
use \App\Http\Controllers\Admin\DestinasiController;
use \App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Admin Route */
Route::middleware(['admin'])->group(function() {
    // Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

    // Route::get('/admin', [AdminController::class, 'table'])->name('table');

    // Blog Kategori 
    Route::resource('blogkategori', \App\Http\Controllers\Admin\BlogKategoriController::class)->except('show');
    // Destinasi Kategori 
    Route::resource('destinasikategori', \App\Http\Controllers\Admin\DestinasiKategoriController::class)->except('show');
    // Destinasi
    Route::resource('destinasi', \App\Http\Controllers\Admin\DestinasiController::class)->except('show');
    Route::resource('destinasi.galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['create', 'index','show']);
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class)->except('show');
    Route::resource('kabupaten', \App\Http\Controllers\Admin\KabupatenController::class)->except('show');
    Route::resource('kuliner', \App\Http\Controllers\Admin\KulinerController::class)->except('show');
    // Route::post('/galleries', [GalleryController::class ,'store'])->name('galleries.store');
    // Route::post('/galleries', 'Admin\GalleryController@store')->name('galleries.store');



});
/* End Admin Route */

/* Tampian front */
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/tentang-kami', [HomeController::class, 'tentangkami'])->name('tentangkami');
Route::get('/kumpulan-berita', [HomeController::class, 'kumpulanberita'])->name('kumpulanberita');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/kumpulan-lokasi', [HomeController::class, 'kumpulanlokasi'])->name('kumpulanlokasi');
/* Tampian front end*/

/* Login Google */
Route::get('auth/google',[LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);
/* Login Google */




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin_dashboard');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Test
Route::get('/test', function () {
    return view('admin.destinasi_kategori.edit');
});
