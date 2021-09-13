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
Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('/about', function () {
    echo "Nama : Reihan Amru<br>";
    echo "NIM : 2031710082";
});
Route::get('/articles', function ($id='1') {
    echo "Halaman artikel 1";
});
Route::get('/articles', function ($id) {
    echo "Halaman artikel dengan ID".$id;
});