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
                <input type="number" name="price" class="form-control" placeholder="Preço do Quarto">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea name="description" class="form-control" placeholder="Descrição do Quarto"></textarea>
            </div>
            <div class="col">
                <input type="file" name="thumbnail" class="form-control" style="height: 50px;" accept="image/*" placeholder="Imagem do Quarto">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection