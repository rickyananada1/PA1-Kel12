<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/home/about', function () {
    return view('layout.frontend.about');
});
Route::get('/home/news', function () {
    return view('layout.frontend.news');
});
Route::get('/home/newsdetail', function () {
    return view('layout.frontend.newsdetail');
});

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');