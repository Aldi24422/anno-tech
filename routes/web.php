<?php

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

// 1. Route ke Halaman Utama (Home)
Route::get('/', function () {
    return view('pages.home');
});

// 2. Route ke Halaman Tentang (About)
Route::get('/about', function () {
    return view('pages.about');
});