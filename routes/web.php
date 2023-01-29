<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\binController;

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

Route::resource('/Bin', binController::class);
// Route::get('/line-chart', [binController::class, 'LineChart']);
Route::get('/Report', [binController::class, 'LineChart']);
