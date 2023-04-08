<?php

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

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/admin', [AdminController::class, 'table'])->name('table');

Route::get('/admin/list-blog', [AdminController::class, 'listblog'])->name('listblog');
Route::get('/admin/list-wisata', [AdminController::class, 'listwisata'])->name('listwisata');
/* End Admin Route */


/* Tampian front */
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/tentang-kami', [HomeController::class, 'tentangkami'])->name('tentangkami');
Route::get('/kumpulan-berita', [HomeController::class, 'kumpulanberita'])->name('kumpulanberita');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/kumpulan-lokasi', [HomeController::class, 'kumpulanlokasi'])->name('kumpulanlokasi');


/* Tampian front end*/




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('auth/google',[LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Test
Route::get('/test', function () {
    return view('navigation-menu');
});
// Test