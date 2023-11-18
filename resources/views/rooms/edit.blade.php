@extends('layouts.app')
  
@section('title', 'Editar')
  
@section('contents')
    <h1 class="mb-0">Editar Quartos</h1>
    <hr />
    <form action="{{ route('rooms.update', $rooms->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Andar do Quarto</label>
                <input type="text" name="floor" class="form-control" placeholder="Andar do Quarto" value="{{ $rooms->floor }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Número do Quarto</label>
                <input type="number" name="room_no" class="form-control" placeholder="Número do Quarto" value="{{ $rooms->room_no }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Preço do Quarto</label>
                <input type="number" name="price" class="form-control" placeholder="Preço do Quarto" value="{{ $rooms->price }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tipo do Quarto</label>
                <input type="text" name="roomType" class="form-control" placeholder="Tipo do Quarto" value="{{ $rooms->roomType->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Descrição do Quarto</label>
                <input type="text" name="description" class="form-control" placeholder="Descrição do Quarto" value="{{ $rooms->description }}" >
            </div>
            </div>
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">Status do Quarto</label>
            <select name="status" class="form-control">
                <option value=" ">Status do Quarto</option>
                <option value="Livre">Livre</option>
                <option value="Ocupado">Ocupado</option>
                <option value="Reservado">Reservado</option>
            </select>
        </div>
    </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection