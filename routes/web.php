<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicApiController;


Route::get('/fetch-apis', [PublicApiController::class, 'fetchApis']);

Route::get('/', function () {
    return view('welcome');
});
