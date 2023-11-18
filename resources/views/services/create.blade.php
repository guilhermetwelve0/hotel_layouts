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
            <div class="input-group">
                <span class="input-group-text">R$</span>
                <input type="number" name="price" class="form-control" id="price" placeholder="Valor do Serviço" step="0.01">
            </div>
        </div>
    <div class="col">
        <select name="icon" class="form-control">
            <option value=" ">Ícone</option>
            <option value="&#127946">&#127946;</option>
            <option value="&#127973">&#127973;</option>
            <option value="&#128218">&#128218;</option>
            <option value="&#127934">&#127934;</option>
            <option value="&#128250">&#128250;</option>
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