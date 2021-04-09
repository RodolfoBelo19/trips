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

Route::get('trips', [tripsController::class, 'trips'])-> name('trips');

Route::post('trips', [tripsController::class, 'insert']) -> name('trips.insert');

Route::get('trips/create', [tripsController::class, 'create']) -> name('trips.create');

Route::get('trips/{trip}/edit', [tripsController::class, 'edit'])-> name('trips.edit');

Route::get('trips/show/{id}', [tripsController::class, 'show'])-> name('trips.show');

Route::put('trips/{trip}', [tripsController::class, 'editTrip']) -> name('trips.editTrip');

Route::delete('trips/{trip}', [tripsController::class, 'delete']) -> name('trips.delete');



