<?php

use App\Http\Controllers\filmController;
use App\Http\Controllers\hallController;
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


