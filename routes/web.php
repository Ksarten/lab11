<?php

use App\Http\Controllers\filmController;
use App\Http\Controllers\hallController;
use App\Http\Controllers\seatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello World!']);
});

Route::get('/hall', [HallController::class, 'index']);

Route::get('/hall/{id}', [HallController::class, 'show']);

Route::get('/film', [FilmController::class, 'index']);

Route::get('/film/{id}', [FilmController::class, 'show']);

Route::get('/seat', [SeatController::class, 'index']);

Route::get('/seat/create', [SeatController::class, 'create']);

Route::post('/seat', [SeatController::class, 'store']);

Route::get('/seat/edit/{id}', [SeatController::class, 'edit']);

Route::post('/seat/update/{id}', [SeatController::class, 'update']);

Route::get('/seat/destroy/{id}', [SeatController::class, 'destroy']);
