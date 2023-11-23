<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::get('/', [MealController::class, 'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::prefix('meal')->group(function () {
        Route::post('store', [MealController::class, 'store']);
        Route::post('update/{meal}', [MealController::class, 'update']);
        Route::post('destroy', [MealController::class, 'destroy']);
    });
});
