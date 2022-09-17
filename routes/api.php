<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\CardGroupController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\RegisterController;
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

Route::post('register', [RegisterController::class, 'store']);
Route::post('login', [AuthController::class, 'auth']);

Route::apiResources([
    'card-groups' => CardGroupController::class,
    'teams' => TeamController::class,
    'projects' => ProjectController::class,
    'cards' => CardController::class,
]);

Route::post('cards/card-group', [CardController::class, 'updateCardGroup']);

Route::group(['middleware' => 'auth:sanctum'], function () {
});
