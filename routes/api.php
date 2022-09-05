<?php

use App\Http\Controllers\Api\CardGroupController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
});

Route::middleware('auth:sanctum')->prefix('card-group')->group(function () {
    Route::get('/', [CardGroupController::class, 'index']);
    Route::post('/store', [CardGroupController::class, 'store']);
    Route::delete('/destroy/{id}', [CardGroupController::class, 'destroy']);
    Route::get('/{id}', [CardGroupController::class, 'find']);
});
