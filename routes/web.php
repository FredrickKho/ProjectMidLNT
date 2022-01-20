<?php
use App\Http\Controllers\BookController;
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


Route::get('/',[BookController::class,'home'])->name('home');
Route::get('/create',[BookController::class,'createSite'])->name("createSite");
Route::get('/book/list', [BookController::class, 'list'])->name("list");
Route::post('/book/createbook', [BookController::class, 'create'])->name("create");
Route::delete('/book/{id}-deleted',[BookController::class,'destroy'])->name("delete");
Route::get('/book/edit/{id}',[BookController::class,'updatePage'])->name('updatePage');
Route::patch('/book/update/{id}',[BookController::class,'update'])->name("update");