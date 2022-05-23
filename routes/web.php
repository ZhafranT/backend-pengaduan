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
    // return view('loginadmin');
    // return view('pengaduan');
    // return view('jawabpengaduan'); 
    // return view('berita');
    // return view('inputberita');
    // return view('uupk');           
    // return view('inputuupk');      
    // return view('editberita');
    // return view('edituupk');       
    // return view('test');
    return view('pengaduanprocess');
    // return view('pengaduanmediasi');
    // return view('pengaduandone');
});
