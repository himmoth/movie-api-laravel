<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;

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

Route::get('/',[MovieController::class,'index']);
Route::get('/movie/show/{movie}',[MovieController::class,'show'])->name('show');
Route::get('/actor',[ActorController::class,'index'])->name('actor.index');
Route::get('/actor/show/{actor}',[ActorController::class,'show'])->name('actor.show');
Route::get('/tv/show/{tv}',[ActorController::class,'show'])->name('tv.show');



