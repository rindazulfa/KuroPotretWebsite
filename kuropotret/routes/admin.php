<?php

use Illuminate\Support\Facades\Route;

Route::get("login", "AuthController@getLogin");
Route::get("register", "AuthController@getRegister")->name('register');
Route::post("register", "AuthController@register")->name('register.post');
Route::post("login", "AuthController@postLogin")->name("login");

Route::group(['middleware' => ['auth'=>'CustomMiddleware:admin']], function () {

Route::get("logout", "AuthController@logout")->name("logout");
Route::resource('admin','AdminController');
Route::resource('package','PackageController');
Route::resource('order','OrderController');
Route::resource('tambahproduct','TambahproductController');
Route::post('tambahproduct.store','TambahproductController@store');
});
?>
