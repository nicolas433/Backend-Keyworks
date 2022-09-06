<?php

use App\Http\Controllers\Api\CardGroupController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TeamController;
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

Route::apiResources([
    'card-group' => CardGroupController::class,
    'team' => TeamController::class,
    'project' => ProjectController::class,
]);

Route::group(['middleware' => 'auth:sanctum'], function () {
});
