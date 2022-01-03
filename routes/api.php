<?php

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

// Games API
Route::get('/games_with_services', [App\Http\Controllers\GamesController::class, 'showAllGamesWithService']);
Route::get('/games', [App\Http\Controllers\GamesController::class, 'showAllGames']);
Route::post('/games', [App\Http\Controllers\GamesController::class, 'addGame']);

// Games Service API
Route::get('/services/{game_slug}', [App\Http\Controllers\GameServiceController::class, 'showGameServices']);
Route::post('/{game_id}/services', [App\Http\Controllers\GameServiceController::class, 'addGameServices']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
