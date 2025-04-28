<?php

namespace App\Http\Controllers;

use App\Models\hall;
use Illuminate\Http\Request;

class hallController extends Controller
{
    public function index()
    {
        return view('halls', ['halls' => hall::all()]);
    }

    public function show(string $id)
    {
        return view('hall', ['hall' => hall::all()->where('id', $id)->first()]);
    }

}


