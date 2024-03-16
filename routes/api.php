<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicApiController;
use App\Http\Controllers\Api\EntityController;

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
Route::get('/{category}', [EntityController::class, 'index']);

Route::get('/fetch-apis', [PublicApiController::class, 'fetchApis']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
