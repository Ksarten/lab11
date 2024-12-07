<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;

class filmController extends Controller
{
    public function index()
    {
        return view('films', ['films' => film::all()]);
    }
    public function show(string $id)
    {
        return view('film', ['film' => film::all()->where('id', $id)->first()]);
    }
}
