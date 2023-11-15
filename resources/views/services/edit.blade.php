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
                <input type="number" name="price" class="form-control" placeholder="Valor do Serviço" value="{{ $services->price }}" >
            </div>
        <div class="col">
        <label class="form-label">Ícone do Serviço</label>
            <select name="icon" class="form-control">
                <option value=" ">Ícone</option>
                <option value="&#x1F6B2">&#x1F6B2;</option>
                <option value="&#x1F6A7">&#x1F6A7;</option>
                <option value="&#x1F511">&#x1F511;</option>
        </select>
    </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection