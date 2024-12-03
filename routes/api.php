<?php

use App\Http\Controllers\API\wifi_dataController;
use App\Http\Resources\wifi_dataResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('wifi_data', wifi_dataController::class);
