<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\Front\HomeController;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\KabupatenController;
use \App\Http\Controllers\Admin\DestinationCategoryController;


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

Route::middleware(['admin'])->group(function() {

    Route::resource('kabupaten', \App\Http\Controllers\Admin\KabupatenController::class)->except('show');
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class)->except('show');
    Route::resource('blogCategory', \App\Http\Controllers\Admin\BlogCategoryController::class)->except('show');
    Route::resource('blog.gallery', \App\Http\Controllers\Admin\BlogGalleryController::class)->except(['create', 'index','show', 'update']);
    Route::resource('destination', \App\Http\Controllers\Admin\DestinationController::class)->except('show');
    Route::resource('destinationCategory', \App\Http\Controllers\Admin\DestinationCategoryController::class)->except('show');
    Route::resource('destination.gallery', \App\Http\Controllers\Admin\DestinationGalleryController::class)->except(['create', 'index','show', 'update']);
    Route::resource('accommodation', \App\Http\Controllers\Admin\AccommodationController::class)->except('show');
    Route::resource('restaurant', \App\Http\Controllers\Admin\RestaurantController::class)->except('show');

    // Route::post('/galleries', [GalleryController::class ,'store'])->name('galleries.store');
    // Route::post('/galleries', 'Admin\GalleryController@store')->name('galleries.store');



});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';












/*--------------Login With Google-------------- */
Route::get('auth/google',[LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);
/*--------------Login With Google End-------------- */

/* -----------------------Tampian front----------------- */
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/tentang-kami', [HomeController::class, 'tentangkami'])->name('tentangkami');
Route::get('/kumpulan-berita', [HomeController::class, 'kumpulanberita'])->name('kumpulanberita');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/kumpulan-lokasi', [HomeController::class, 'kumpulanlokasi'])->name('kumpulanlokasi');
/* ------------------------Tampian front end-------------------------*/