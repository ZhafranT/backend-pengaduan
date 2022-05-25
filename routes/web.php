<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\uupkController;
use App\Http\Controllers\statisticController;

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
// Route::get('/',[dataController::class, 'showadmin'])->name('layout.main');
// Route::get('/main',[adminController::class, 'index'])->name('layout.main');

// Route::get('/', function () {return view('Admin.login');})->name('login');

Route::group(['middleware' => 'guest'], function (){
    Route::get('/',[adminController::class, 'index'])->name('login');
    Route::post('/',[adminController::class, 'authenticate'])->name('authenticate');
});

Route::group(['middleware' => 'auth'], function (){
    // Route::get('/pengaduan', function () {return view('Pengaduan.pengaduan');});
    Route::get('/pengaduanunresolved',[pengaduanController::class, 'indexUnresolved'])->name('Pengaduan.pengaduanunresolved');
    Route::get('/pengaduanprocess',[pengaduanController::class, 'indexOnprocess'])->name('Pengaduan.pengaduanprocess');
    Route::get('/pengaduanmediasi',[pengaduanController::class, 'indexMediasi'])->name('Pengaduan.pengaduanmediasi');
    Route::get('/pengaduandone',[pengaduanController::class, 'indexDone'])->name('Pengaduan.pengaduandone');

    Route::get('/berita',[newsController::class, 'index'])->name('News.berita');
    Route::get('/inputberita',[newsController::class, 'create'])->name('News.inputberita');
    Route::post('/submitberita',[newsController::class, 'store'])->name('submitberita');
    Route::get('/editberita/{id}',[newsController::class, 'edit'])->name('News.editberita');
    Route::post('/updateberita/{id}',[newsController::class, 'update'])->name('updateberita');
    Route::get('/deleteberita/{id}',[newsController::class, 'destroy'])->name('deleteberita');
    
    Route::get('/uupk',[uupkController::class, 'index'])->name('Uupk.uupk');
    Route::get('/inputuupk',[uupkController::class, 'create'])->name('Uupk.inputuupk');
    Route::post('/submituupk',[uupkController::class, 'store'])->name('submituupk');
    Route::get('/edituupk/{id}',[uupkController::class, 'edit'])->name('News.edituupk');
    Route::post('/updateuupk/{id}',[uupkController::class, 'update'])->name('updateuupk');
    Route::get('/deleteuupk/{id}',[uupkController::class, 'destroy'])->name('deleteuupk');

    Route::get('/statistic',[statisticController::class, 'index'])->name('Statistic.statistic');
    
    Route::get('/logout',[adminController::class, 'logout'])->name('logout');
    // Route::get('/sidebar',[sidebarController::class, 'index'])->name('layout.main');
});
