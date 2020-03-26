<?php

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
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/studio', function () {
    return view('pages/studio');
});

Route::get('/lifestyle', function () {
    return view('pages/lifestyle');
});

Route::get('/hair', function () {
    return view('pages/hair');
});

Route::get('/commisiom', function () {
    return view('pages/commision');
});
Route::get('/still', function () {
    return view('pages/still');
});
Route::get('/humans', function () {
    return view('pages/humans');
});
