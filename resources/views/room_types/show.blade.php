@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes do Quarto</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nome do Quarto</label>
            <input type="text" name="name" class="form-control" placeholder="Nome do Quarto" value="{{ $room_types->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Descrição</label>
            <input type="text" name="description" class="form-control" placeholder="Descrição" value="{{ $room_types->description }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $room_types->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ $room_types->updated_at }}" readonly>
        </div>
    </div>
@endsection