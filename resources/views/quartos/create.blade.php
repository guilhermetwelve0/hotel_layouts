@extends('layouts.app')
  
@section('title', 'Adicionar Quarto')
  
@section('contents')
    <h1 class="mb-0">Caracteristicas do Quarto</h1>
    <hr />
    <form action="{{ route('quartos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nome" class="form-control" placeholder="Nome do Quarto">
            </div>
            <div class="col">
                <input type="text" name="preco" class="form-control" placeholder="Preço do Quarto">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="andar" class="form-control" placeholder="Andar do Quarto">
            </div>
            <div class="col">
                <input type="text" name="numero" class="form-control" placeholder="Numero do Quarto">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection