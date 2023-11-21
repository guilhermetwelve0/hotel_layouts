<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Guest::orderBy('created_at', 'DESC')->get();
        return view('guests.index', compact('guests'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valide o campo cpf usando a regra cpf personalizada
        $validator = Validator::make($request->all(), [
            'cpf' => ['required', 'string', 'cpf'],
        ], [
            'cpf.cpf' => 'O CPF informado não é válido.',
        ]);

        // Se a validação falhar, retorne para a página anterior com os erros
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Guest::create($request->all());

        return redirect()->route('guests')->with('success', 'Hóspede adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guests = Guest::findOrFail($id);

        return view('guests.show', compact('guests'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guests = Guest::findOrFail($id);

        return view('guests.edit', compact('guests'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guests = Guest::findOrFail($id);

        $guests->update($request->all());

        return redirect()->route('guests')->with('success', 'Hóspede atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guests = Guest::findOrFail($id);

        $guests->delete();

        return redirect()->route('guests')->with('success', 'Hóspede deletado com sucesso');
    }
}
