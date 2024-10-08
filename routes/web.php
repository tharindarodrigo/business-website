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
    return view('index');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pos', function () {
    return view('pos');
});

Route::get('/erp', function () {
    return view('erp');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/blue-collar', function () {
    return view('blueCollar');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/avsquad', function () {
    return view('avsquad');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::post('/newsletter-signup', function () {
    return back();
});



