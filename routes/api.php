<?php


use App\Http\Controllers\FilmControllerApi;
use App\Http\Controllers\HallControllerApi;
use App\Http\Controllers\SeatControllerApi;
use Illuminate\Support\Facades\Route;

Route::get('/seat', [SeatControllerApi::class, 'index']);
Route::get('/seat/{id}', [SeatControllerApi::class, 'show']);

Route::get('/hall', [HallControllerApi::class, 'index']);
Route::get('/hall/{id}', [HallControllerApi::class, 'show']);

Route::get('/film', [FilmControllerApi::class, 'index']);
Route::get('/film/{id}', [FilmControllerApi::class, 'show']);
