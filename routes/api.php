<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ArtworkController;
use App\Http\Controllers\API\CommissionController;

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
Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
//Route::post('commissions', [AuthController::class, 'commissions']);

Route::get('public/artworks', [ArtworkController::class, 'index']);
//Route::get('public/commissions', [CommissionController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('artwork', ArtworkController::class);
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('commission', CommissionController::class);
    Route::post('commissions', [CommissionController::class, 'store']);
});
