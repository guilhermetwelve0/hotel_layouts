@extends('layouts.app')
  
@section('title', 'Editar')
  
@section('contents')
    <h1 class="mb-0">Editar Quartos</h1>
    <hr />
    <form action="{{ route('room_types.update', $room_types->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome do Quarto</label>
                <input type="text" name="name" class="form-control" placeholder="Nome do Quarto" value="{{ $room_types->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Preço do Quarto</label>
                <input type="text" name="price" class="form-control" placeholder="Preço do Quarto" value="{{ $room_types->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="description" class="form-control" placeholder="Descrição" value="{{ $room_types->description }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Imagem</label>
                <input type="file" name="thumbnail" class="form-control" style="height: 50px;" accept="image/*" placeholder="Imagem do Quarto">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection