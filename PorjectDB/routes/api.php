<?php

use App\Http\Controllers\Api\ApiFlightsController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\PassengerController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('Flights',ApiFlightsController::class);

// Route::get('/Flights', [FlightsController::class, 'index']);
// Route::get('/Passenger', [PassengerController::class, 'index']);
// Route::get('/Flights/{id}', [FlightsController::class, 'destroy']);


Route::resource('/Flights', FlightsController::class);
Route::resource('/Passenger', PassengerController::class);
 

 // Route::apiResource('Flights',FlightsController::class);