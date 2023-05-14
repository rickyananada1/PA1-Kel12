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


/*== Route Admin ===================================================================================================================================== */
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->middleware(['admin'])->name('admin.dashboard');
require __DIR__ . '/adminauth.php';
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'],function(){
    
    Route::resource('kabupaten', \App\Http\Controllers\Admin\KabupatenController::class)->except('show');
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class)->except('show');
    Route::patch('/blog/{id}/update-status', [\App\Http\Controllers\Admin\BlogController::class, 'updateStatus'])->name('blog.is_share');
    Route::resource('blogCategory', \App\Http\Controllers\Admin\BlogCategoryController::class)->except('show');
    Route::resource('blog.gallery', \App\Http\Controllers\Admin\BlogGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::resource('destination', \App\Http\Controllers\Admin\DestinationController::class)->except('show');
    Route::patch('/destination/{id}/update-status', [\App\Http\Controllers\Admin\DestinationController::class, 'updateStatus'])->name('destination.is_share');
    Route::resource('destinationCategory', \App\Http\Controllers\Admin\DestinationCategoryController::class)->except('show');
    Route::resource('destination.gallery', \App\Http\Controllers\Admin\DestinationGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::resource('restaurant', \App\Http\Controllers\Admin\RestaurantController::class)->except('show');
    Route::patch('/restaurant/{id}/update-status', [\App\Http\Controllers\Admin\RestaurantController::class, 'updateStatus'])->name('is_share');
    Route::resource('restaurant.gallery', \App\Http\Controllers\Admin\RestaurantGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::resource('accommodation', \App\Http\Controllers\Admin\AccommodationController::class)->except('show');
    Route::patch('/accommodation/{id}/update-status', [\App\Http\Controllers\Admin\AccommodationController::class, 'updateStatus'])->name('accommodation.is_share');
    Route::resource('accommodation.gallery', \App\Http\Controllers\Admin\AccommodationGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::get('profile', [\App\Http\Controllers\Admin\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
    /*---------Contributor */
    Route::get('/contributors', [\App\Http\Controllers\Admin\DashboardController::class, 'contributors'])->name('contributors');
    Route::patch('/contributors/{id}/update-status', [\App\Http\Controllers\Admin\DashboardController::class, 'updateStatus'])->name('updateStatus');
});
/*== Route Admin ===================================================================================================================================== */






/*== Route Contributor ===================================================================================================================================== */
Route::get('/contributor/dashboard', function(){
    return view('contributor.dashboard');
})->middleware(['auth:contributor', 'contributor.status'])->name('contributor.dashboard');
require __DIR__ . '/contributorauth.php';

Route::group(['prefix' => 'contributor', 'as' => 'contributor.', 'middleware' => 'contributor.status'],function(){

    Route::resource('kabupaten', \App\Http\Controllers\Contributor\KabupatenController::class)->except(['create', 'show', 'update']);
    Route::resource('blog', \App\Http\Controllers\Contributor\BlogController::class)->except('show');
    Route::resource('blogCategory', \App\Http\Controllers\Contributor\BlogCategoryController::class)->except('show');
    Route::resource('blog.gallery', \App\Http\Controllers\Contributor\BlogGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::resource('destination', \App\Http\Controllers\Contributor\DestinationController::class)->except('show');
    Route::resource('destinationCategory', \App\Http\Controllers\Contributor\DestinationCategoryController::class)->except('show');
    Route::resource('destination.gallery', \App\Http\Controllers\Contributor\DestinationGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::resource('restaurant', \App\Http\Controllers\Contributor\RestaurantController::class)->except('show');
    Route::resource('restaurant.gallery', \App\Http\Controllers\Contributor\RestaurantGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::resource('accommodation', \App\Http\Controllers\Contributor\AccommodationController::class)->except('show');
    Route::resource('accommodation.gallery', \App\Http\Controllers\Contributor\AccommodationGalleryController::class)->except(['create', 'index', 'show', 'update']);
    Route::get('profile', [\App\Http\Controllers\Contributor\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\Contributor\ProfileController::class, 'update'])->name('profile.update');
});
/*== Route Contributor ===================================================================================================================================== */








/* ================================Login With Google============================================== */
Route::get('auth/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);
/* ================================Login With Google============================================== */

/*==================================Frontend================================== */
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('destinations', [\App\Http\Controllers\Front\DestinationController::class, 'index'])->name('destinations.index');
Route::get('destinations/{destination:slug}', [\App\Http\Controllers\Front\DestinationController::class, 'show'])->name('destinations.show');

Route::get('/tentang-kami', [HomeController::class, 'tentangkami'])->name('tentangkami');
Route::get('/kumpulan-berita', [HomeController::class, 'kumpulanberita'])->name('kumpulanberita');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/kumpulan-lokasi', [HomeController::class, 'kumpulanlokasi'])->name('kumpulanlokasi');
/*==================================Frontend================================== */

Route::get('/test', function () {
    return view('front.pages.blog');
});


/* Dashboard admin */

