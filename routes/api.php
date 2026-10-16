<?php

use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/types',[TypeController::class,'index']);
Route::get('/types/{type}', [TypeController::class, 'show']);
Route::put('/types/{type}', [TypeController::class, 'update']);
Route::post('/types', [TypeController::class, 'store']);
Route::delete('/types/{type}', [TypeController::class, 'destroy']);