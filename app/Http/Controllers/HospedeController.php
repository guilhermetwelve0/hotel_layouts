<?php

namespace App\Http\Controllers;

use App\Models\Hospede;
use Illuminate\Http\Request;

class HospedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospede = Hospede::orderBy('created_at', 'DESC')->get();
        return view('hospede.index', compact('hospede'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hospede.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hospede::create($request->all());

        return redirect()->route('hospede')->with('success', 'Hospede adicionando com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hospede = Hospede::findOrFail($id);

        return view('hospede.show', compact('hospede'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hospede = Hospede::findOrFail($id);

        return view('hospede.edit', compact('hospede'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hospede = Hospede::findOrFail($id);

        $hospede->update($request->all());

        return redirect()->route('hospede')->with('success', 'Hospede adicionado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hospede = Hospede::findOrFail($id);

        $hospede->delete();

        return redirect()->route('hospede')->with('success', 'Hospede adicionado com sucesso');
    }
}
