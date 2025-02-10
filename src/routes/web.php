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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/mypage/profile', function () {
Route::get('/profile', function () {
    return view('edit-profile');
});

Route::get('/address', function () {
    return view('edit-address');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/purchase', function () {
    return view('purchase');
});

Route::get('/sell', function () {
    return view('sell');
});
