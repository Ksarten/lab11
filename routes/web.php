<?php

use App\Http\Controllers\filmController;
use App\Http\Controllers\hallController;
use App\Http\Controllers\LoginController;
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

Route::post('/seat', [SeatController::class, 'store']);

Route::get('/seat/create', [SeatController::class, 'create'])->middleware('auth');

Route::get('/seat/edit/{id}', [SeatController::class, 'edit'])->middleware('auth');

Route::post('/seat/update/{id}', [SeatController::class, 'update'])->middleware('auth');

Route::get('/seat/destroy/{id}', [SeatController::class, 'destroy'])->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/auth', [LoginController::class, 'authenticate']);

Route::get('/error', function () {
    return view('error', ['message' => session('message')]);
})->name('error');
