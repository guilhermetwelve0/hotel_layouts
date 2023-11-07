@extends('layouts.app')
  
@section('title', 'Adicionar Quarto')
  
@section('contents')
    <h1 class="mb-0">Características do Quarto</h1>
    <hr />
    <form action="{{ route('room_types.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nome do Quarto">
            </div>
            <div class="col">
                <input type="text" name="slug" class="form-control" placeholder="URL">
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Preço do Quarto">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Descrição do Quarto">
            </div>
            <div class="col">
                <input type="text" name="thumbnail" class="form-control" placeholder="Imagem do Quarto">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection