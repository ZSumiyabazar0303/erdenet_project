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
    return view('home/home');
});
Route::get('/admin_home', function () {
    return view('home/admin_home');
});
Route::get('/fields', function () {
    return view('field/fields');
});
Route::get('/signup', function () {
    return view('sign/signup');
});
Route::get('/signin', function () {
    return view('sign/signin');
});
Route::get('/fdata', function () {
    return view('fdata/fdata');
});
Route::get('/fertilizers', function () {
    return view('fertilizers/fertilizers');
});
Route::get('/notes', function () {
    return view('notes/notes');
});
Route::get('/planting', function () {
    return view('planting/planting');
});
Route::get('/weather', function () {
    return view('weather/weather');
});
Route::get('/fieldScript', function () {
    return view('fieldScript/fields');
});

Route::get('/crop/rotation', function () {
    return view('crop/rotation');
});

Route::get('/building', function () {
    return view('building/building');
});

