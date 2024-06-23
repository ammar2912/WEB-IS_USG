<?php

use App\Http\Controllers\SheepController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/create-sheep', function () {
    return view('createSheep');
})->name('sheep.create');

Route::get('/read-sheep', function () {
    return view('readSheep');
})->name('sheep.read');

Route::get('/edit-sheep', function () {
    return view('editSheep');
})->name('sheep.edit');

Route::get('/create-vitalSign', function () {
    return view('createVitalSign');
})->name('vitalSign.create');

Route::get('/create-Radiologi', function () {
    return view('createRadiologi');
})->name('Radiologi.create');

Route::resource('sheep', SheepController::class);