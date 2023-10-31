<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartos;

class QuartosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quartos = Quartos::orderBy('created_at', 'DESC')->get();

        return view('quartos.index', compact('quartos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quartos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Quartos::create($request->all());

        return redirect()->route('quartos')->with('success', 'Quarto adicionando com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $quartos = Quartos::findOrFail($id);

        return view('quartos.show', compact('quartos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $quartos = Quartos::findOrFail($id);

        return view('quartos.edit', compact('quartos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $quartos = Quartos::findOrFail($id);

        $quartos->update($request->all());

        return redirect()->route('quartos')->with('success', 'Quarto adicionado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quartos = Quartos::findOrFail($id);

        $quartos->delete();

        return redirect()->route('quartos')->with('success', 'Quarto adicionado com sucesso');
    }
}
