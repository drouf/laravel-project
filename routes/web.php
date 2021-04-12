<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\SearchController;


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

Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/explanation', [IndexController::class, 'explanation'])->name('explanation');
Route::get('/card/{slug}', [IndexController::class, 'getAnimalCard'])->name('getAnimalCard');

Route::get('/search', [SearchController::class, 'getParamQuery'])->name('getParamQuery');

