<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\alqv_controler;
Route::apiResource('/users', alqv_controler::class);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
