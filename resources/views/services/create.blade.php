@extends('layouts.app')
  
@section('title', 'Adicionar Serviço')
  
@section('contents')
    <h1 class="mb-0">Características do Serviço</h1>
    <hr />
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nome do Serviço">
            </div>
            <div class="col">
                <input type="text" name="slug" class="form-control" placeholder="URL">
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Valor do Serviço">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
        <select name="icon" class="form-control">
            <option value=" ">Ícone</option>
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