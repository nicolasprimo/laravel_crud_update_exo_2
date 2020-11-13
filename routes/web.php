<?php

use App\Http\Controllers\MembreController;
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

Route::get('/', [MembreController::class,'index']);
Route::get('/create-membre', [MembreController::class,'create']);
Route::post('/store-membre', [MembreController::class,'store']);
Route::get('/show-membre/{id}', [MembreController::class,'show']);
Route::get('/edit/{id}', [MembreController::class,'edit']);
Route::post('/user-update/{id}', [MembreController::class,'update']);
Route::post('/delete/{id}', [MembreController::class,'delete']);
Route::get('/destroy', [MembreController::class,'destroy']);

