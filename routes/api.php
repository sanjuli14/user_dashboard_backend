<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('api')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/filter/{role}', [UserController::class, 'filter']);
    Route::get('/stats', [UserController::class, 'stats']);

    // Ruta de prueba
    Route::get('/ping', function () {
        return response()->json(['status' => 'ok']);
    });
});
