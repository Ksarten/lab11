<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;

class FilmControllerApi extends Controller
{
    public function index()
    {
        return response(Film::all());
    }

    public function show(string $id)
    {
        return response(Film::find($id));
    }
}
