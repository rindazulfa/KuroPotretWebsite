<?php

use Illuminate\Support\Facades\Route;
Route::resource('admin','AdminController');
Route::resource('package','PackageController');
Route::resource('order','OrderController');
Route::resource('tambahproduct','TambahproductController');
Route::post('tambahproduct.store','TambahproductController@store');

?>