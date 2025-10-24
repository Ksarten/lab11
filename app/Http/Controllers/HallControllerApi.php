<?php

namespace App\Http\Controllers;

use App\Models\hall;
use Illuminate\Http\Request;

class HallControllerApi extends Controller
{
    public function index()
    {
        return response(Hall::all());
    }

    public function show(string $id)
    {
        return response(Hall::find($id));
    }
}
