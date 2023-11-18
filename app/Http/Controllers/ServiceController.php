<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'DESC')->get();
        return view('services.index', compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'icon' => 'required',
        ]);
    
        // Formatação do preço para reais (R$)
        $formattedPrice = number_format($request->input('price'), 2, ',', '.');
    
        // Criação do serviço com preço formatado
        Service::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'icon' => $request->input('icon'),
        ]);

        return redirect()->route('services')->with('success', 'Serviço adicionando com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $services = Service::findOrFail($id);

        return view('services.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::findOrFail($id);

        return view('services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services = Service::findOrFail($id);

        $services->update($request->all());

        return redirect()->route('services')->with('success', 'Serviço atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = Service::findOrFail($id);

        $services->delete();

        return redirect()->route('services')->with('success', 'Serviço deletado com sucesso');
    }
}
