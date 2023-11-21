@extends('layouts.app')
  
@section('title', 'Editar')
  
@section('contents')
    <h1 class="mb-0">Editar Serviços</h1>
    <hr />
    <form action="{{ route('services.update', $services->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome do Serviço</label>
                <input type="text" name="name" class="form-control" placeholder="Nome do Serviço" value="{{ $services->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">Valor do Serviço</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="number" name="price" class="form-control" placeholder="Valor do Serviço" value="{{ $services->price }}">
                </div>
            </div>
            <div class="col">
            <label class="form-label">Ícone</label>
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
        <div class="row">
        <div class="col d-flex justify-content-center">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection