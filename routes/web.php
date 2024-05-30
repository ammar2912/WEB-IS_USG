<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tambah-domba', function () {
    return view('tambah-domba');
});