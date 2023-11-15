<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::orderBy('created_at', 'DESC')->get();
        return view('rooms.index', compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $room_types = RoomType::all();
        return view('rooms.create', compact('room_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'floor' => 'required',
            'room_no' => 'required',
            'room_type_id' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        Room::create($request->all());

        return redirect()->route('rooms')->with('success', 'Quarto adicionando com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rooms = Room::findOrFail($id);

        return view('rooms.show', compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rooms = Room::findOrFail($id);

        return view('rooms.edit', compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rooms = Room::findOrFail($id);

        $rooms->update($request->all());

        return redirect()->route('rooms')->with('success', 'Quarto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rooms = Room::findOrFail($id);

        $rooms->delete();

        return redirect()->route('rooms')->with('success', 'Quarto deletado com sucesso');
    }
}
