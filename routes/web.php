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

Route::get('/admission1', function () {
    return view('admission1');
});

Route::get('/admission2', function () {
    return view('admission2');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gallery1', function () {
    return view('gallery1');
});

Route::get('/gallery3', function () {
    return view('gallery3');
});

Route::get('/about', function () {
    return view('about');
});
