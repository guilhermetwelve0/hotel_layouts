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
                <input type="number" name="room_no" class="form-control" placeholder="Número do Quarto">
            </div>
            <div class="col">
            <div class="input-group">
                <span class="input-group-text">R$</span>
                <input type="number" name="price" class="form-control" id="price" placeholder="Preço do Quarto" step="0.01">
            </div>
        </div>
            <div class="col">
                <select name="room_type_id" class="form-control">
                    <option value="">Selecionar Tipo de Quarto</option>
                @foreach($room_types as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Descrição do Quarto">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
        <select name="status" class="form-control">
            <option value=" ">Status do Quarto</option>
            <option value="Livre">Livre</option>
            <option value="Ocupado">Ocupado</option>
            <option value="Reservado">Reservado</option>
        </select>
    </div>
</div>

    <div class="row mb-3">
        <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection