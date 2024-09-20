<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function () {
    return view('layout.layout');
})->name('layout');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/Landing', function () {
    return view('landing');
})->name('landing');