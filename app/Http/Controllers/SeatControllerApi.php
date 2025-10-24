<?php

namespace App\Http\Controllers;

use App\Models\seat;
use Illuminate\Http\Request;

class SeatControllerApi extends Controller
{
    public function index()
    {
        return response(Seat::all());
    }

    public function show(string $id)
    {
        return response(Seat::find($id));
    }
}

