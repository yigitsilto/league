<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('team-standings', [\App\Http\Controllers\TeamStandingController::class, 'index']);
Route::get('fixtures', [\App\Http\Controllers\FixturesController::class, 'index']);
Route::get('matches', [\App\Http\Controllers\MatchesController::class, 'index']);
Route::post('simulate', [\App\Http\Controllers\SimulationController::class, 'simulate']);
