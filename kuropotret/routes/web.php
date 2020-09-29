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
Route::get('/', function () {
    return view('dashboard');
    //master- nama file
});

Route::get('about', function () {
    return view('pages\about');
});

Route::get('services', function () {
    return view('pages\services');
});

Route::get('portofolio', function () {
    return view('pages\portofolio');
});

Route::get('portofolio_detail', function () {
    return view('pages\portofolio_details');
});

Route::get('contact', function () {
    return view('pages\contact');
});