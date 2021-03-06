<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SelectController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/select', [SelectController::class, 'select']);
Route::get('/selectlike', [SelectController::class, 'selectlike']);
Route::get('/selectjoin', [SelectController::class, 'selectjoin']);
Route::get('/selectjoinwithwhere', [SelectController::class, 'selectjoinwithwhere']);
