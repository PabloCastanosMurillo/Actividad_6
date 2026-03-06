<?php

use Illuminate\Support\Facades\Route;

route::resource('products','ProductController');

Route::get('/', function () {
    return view('welcome');
});
