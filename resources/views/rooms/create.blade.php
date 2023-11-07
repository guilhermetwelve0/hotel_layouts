@extends('layouts.app')
  
@section('title', 'Adicionar Quarto')
  
@section('contents')
    <h1 class="mb-0">Características do Quarto</h1>
    <hr />
    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="floor" class="form-control" placeholder="Andar do Quarto">
            </div>
            <div class="col">
                <input type="text" name="room_no" class="form-control" placeholder="Número do Quarto">
            </div>
            <div class="col">
                <input type="text" name="room_type_id" class="form-control" placeholder="Tipo do Quarto">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Descrição da Reserva">
            </div>
        <div class="row mb-3">
            <div class="col">
        <select name="status_reservation" class="form-control">
            <option value=" ">Status da Reserva</option>
            <option value="Livre">Livre</option>
            <option value="Ocupado">Ocupado</option>
            <option value="Reservado">Reservado</option>
        </select>
    </div>

    <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection