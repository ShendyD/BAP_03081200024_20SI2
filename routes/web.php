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
    return view('welcome');
});

Route::get('resume', function () {
    return view('resume');
});

Route::get('hasil', function () {
    return view('portfolio');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('krs', function () {
    return view('krs');
});