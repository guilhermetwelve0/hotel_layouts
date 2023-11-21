@extends('layouts.app')
  
@section('title', 'Adicionar Tipo de Quarto')
  
@section('contents')
    <h1 class="mb-0">Dados do Tipo de Quarto</h1>
    <hr />
    <form action="{{ route('room_types.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nome do Quarto">
            </div>
            </div>
        <div class="row mb-3">
            <div class="col">
                <textarea name="description" class="form-control" placeholder="Descrição do Quarto"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection