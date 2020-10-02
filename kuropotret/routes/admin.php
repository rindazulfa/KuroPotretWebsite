<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function ()
{
    return view('pages.admin.index');
});