@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes do Quarto</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Andar do Quarto</label>
            <input type="text" name="floor" class="form-control" placeholder="Andar" value="{{ $rooms->floor }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Número do Quarto</label>
            <input type="text" name="room_no" class="form-control" placeholder="Número do Quarto" value="{{ $rooms->room_no }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Preço do Quarto</label>
            <input type="text" name="price" class="form-control" placeholder="Tipo do Quarto" value="{{ $rooms->price }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tipo do Quarto</label>
            <input type="text" name="roomType" class="form-control" placeholder="Tipo do Quarto" value="{{ $rooms->roomType->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Descrição do Quarto</label>
            <input type="text" name="description" class="form-control" placeholder="Descrição" value="{{ $rooms->description }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status da Reserva</label>
            <input type="text" name="status" class="form-control" placeholder="Status da Reserva" value="{{ $rooms->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $rooms->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ $rooms->updated_at }}" readonly>
        </div>
    </div>
@endsection