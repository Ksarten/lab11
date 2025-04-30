<?php

namespace App\Http\Controllers;

use App\Models\hall;
use App\Models\seat;
use Illuminate\Http\Request;

class seatController extends Controller
{
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('seats', [
            'seats' => Seat:: paginate($perpage)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('seat_create', ['halls' => hall::all()]);
    }

    public function edit(string $id)
    {
        return view('seat_edit', [
            'seat' => Seat::findOrFail($id),
            'halls' => hall::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'hall_id' => 'required|integer'
        ]);

        $seat = new Seat();
        $seat->seat_number = $validated['name'];
        $seat->hall_id = $validated['hall_id'];
        $seat->save();

        return redirect('/seat');
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'hall_id' => 'required|integer'
        ]);

        $seat = Seat::findOrFail($id);
        $seat->seat_number = $validated['name'];
        $seat->hall_id = $validated['hall_id'];
        $seat->save();

        return redirect('/seat');
    }

    public function destroy(string $id)
    {
        Seat::destroy($id);
        return redirect('/seat');
    }
}
