<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Reserva::orderBy('created_at', 'DESC')->get();
        return view('bookings.index', compact('bookings'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guests = Guest::all();
        $rooms = Room::all();
        return view('bookings.create', compact('guests', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'guests_id' => 'required',
            'room_id' => 'required',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);

        $formattedPrice = number_format($request->input('total'), 2, ',', '.');

        Reserva::create([
            'guests_id' => $request->input('guests_id'),
            'room_id' => $request->input('room_id'),            
            'check_in_date' => $request->input('check_in_date'),
            'check_out_date' => $request->input('check_out_date'),
            'total' => $request->input('total'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('bookings')->with('success', 'Reserva adicionanda com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bookings = Reserva::findOrFail($id);

        return view('bookings.show', compact('bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bookings = Reserva::findOrFail($id);

        return view('bookings.edit', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bookings = Reserva::findOrFail($id);

        $bookings->update($request->all());

        return redirect()->route('bookings')->with('success', 'Reserva atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bookings = Reserva::findOrFail($id);

        $bookings->delete();

        return redirect()->route('bookings')->with('success', 'Reserva deletada com sucesso');
    }
}
