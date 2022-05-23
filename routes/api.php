<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test1',[userController::class,'body'])->middleware('jwt.verify');
Route::post('/login',[userController::class,'login']);
Route::post('/register',[userController::class,'register']);
Route::post('/loginadmin',[adminController::class,'login']);
Route::post('/registeradmin',[adminController::class,'register']);