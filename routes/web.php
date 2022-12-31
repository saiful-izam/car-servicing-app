<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;

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

/* default route */

Route::get('/', [HomeController::class, 'index']);


/* service route */


Route::get('/service', [ServiceController::class, 'index']);

Route::get('/service/history', [ServiceController::class, 'serviceHistory']);