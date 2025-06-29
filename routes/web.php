<?php

use App\Http\Controllers\CosmoteAvailabilityController;
use App\Http\Controllers\HomeController;
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



Route::post('/cosmote/check-availability', CosmoteAvailabilityController::class)->name('cosmote.check-availability');
Route::get('/', HomeController::class)->name('home');
