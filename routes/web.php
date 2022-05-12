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

// Route::get('/', function () {return view('welcome');});

Route::get('/berita', function () {return view('News.berita');});
Route::get('/inputberita', function () {return view('News.inputberita');});

Route::get('/uupk', function () {return view('Uupk.uupk');});
Route::get('/inputuupk', function () {return view('Uupk.inputuupk');});

Route::get('/', function () {return view('Pengaduan.pengaduan');});
Route::get('/detailPengaduan', function () {return view('Pengaduan.detailPengaduan');});
Route::get('/jawabPengaduan', function () {return view('Pengaduan.jawabPengaduan');});

Route::get('/loginadmin', function () {return view('loginadmin');});