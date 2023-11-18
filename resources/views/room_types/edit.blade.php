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
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="description" class="form-control" placeholder="Descrição" value="{{ $room_types->description }}" >
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection