<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ArticleController;

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
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/article/{id}', [ArticleController::class, 'show']);
    Route::post('/article/{id}', [ArticleController::class, 'update']);
    Route::delete('/article/{id}', [ArticleController::class, 'destroy']);
});

Route::prefix('v1')->group(function () {
    Route::get('/article/list', [ArticleController::class, 'getList']);
    Route::get('/article/by-id/{id}', [ArticleController::class, 'getById']);
    Route::post('/article/update/{id}', [ArticleController::class, 'update']);
    Route::delete('/article/{id}', [ArticleController::class, 'delete']);
});