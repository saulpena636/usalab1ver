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
    return view('home');
});


Route::get('/servicios', function () {
    return view('services');
});

Route::get('/nosotros', function() {
    return view('nosotros');
});

Route::get('/investigacion', function () {
    return view('investigacion');
});

Route::get('/thanks', function(){
    return view('thanks');
});

Route::get('/academica', function(){
    return view('academica');
});