<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmControllerApi;
use App\Http\Controllers\HallControllerApi;
use App\Http\Controllers\SeatControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);

Route::get('/hall', [HallControllerApi::class, 'index']);
Route::get('/hall/{id}', [HallControllerApi::class, 'show']);

Route::get('/film', [FilmControllerApi::class, 'index']);
Route::get('/film/{id}', [FilmControllerApi::class, 'show']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/seat', [SeatControllerApi::class, 'index']);
    Route::get('/seat/{id}', [SeatControllerApi::class, 'show']);
});
