<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/admin/berita', [AdminController::class, 'berita'])->name('berita');
Route::get('/admin/wisata', [AdminController::class, 'kumpulanwisata'])->name('wisata');
/* End Admin Route */


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', function () {
    return view('layout.frontend.about');
});
Route::get('/news', function () {
    return view('layout.frontend.news');
});
Route::get('/newsdetail', function () {
    return view('layout.frontend.newsdetail');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('layout.backend.dashboard');
    })->name('dashboard');
});

Route::get('auth/google',[LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
