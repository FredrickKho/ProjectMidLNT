<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\pageController;
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


Route::get('/',[PageController::class,'home']);
Route::get('/create',[PageController::class,'create']);
Route::get('/view',[PageController::class,'view']);
Route::get('/update',[PageController::class,'update']);
Route::get('/delete',[PageController::class,'delete']);