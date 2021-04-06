<?php

use App\Http\Controllers\tripsController;
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

Route::get('/', [tripsController::class, 'index']);

Route::get('trips', [tripsController::class, 'trips']);

Route::get('trips/create', [tripsController::class, 'create']);

Route::get('trips/edit', [tripsController::class, 'edit']);

Route::get('trips/show', [tripsController::class, 'show']);


