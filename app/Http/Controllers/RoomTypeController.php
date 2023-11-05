<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room_types = RoomType::orderBy('created_at', 'DESC')->get();
        return view('room_types.index', compact('room_types'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        RoomType::create($request->all());

        return redirect()->route('room_types')->with('success', 'Tipo de quarto adicionando com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room_types = RoomType::findOrFail($id);

        return view('room_types.show', compact('room_types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room_types = RoomType::findOrFail($id);

        return view('room_types.edit', compact('room_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room_types = RoomType::findOrFail($id);

        $room_types->update($request->all());

        return redirect()->route('room_types')->with('success', 'Tipo de quarto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room_types = RoomType::findOrFail($id);

        $room_types->delete();

        return redirect()->route('room_types')->with('success', 'Tipo de quarto deletado com sucesso');
    }
}

