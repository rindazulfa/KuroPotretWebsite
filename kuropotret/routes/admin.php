<?php

use Illuminate\Support\Facades\Route;

Route::resource('product','ProductController');
Route::resource('order','OrderController');
Route::resource('tambahproduct','TambahproductController');
Route::post('tambahproduct.store','TambahproductController@store');

?>