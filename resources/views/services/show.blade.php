@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes do Serviço</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nome do Serviço</label>
            <input type="text" name="name" class="form-control" placeholder="Nome do Serviço" value="{{ $services->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">URL</label>
            <input type="text" name="slug" class="form-control" placeholder="URL" value="{{ $services->slug }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Valor do Serviço</label>
            <input type="text" name="price" class="form-control" placeholder="Valor do Serviço" value="{{ $services->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ícone do Serviço</label>
            <input type="text" name="icon" class="form-control" placeholder="Ícone do Serviço" value="{{ $services->icon }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $services->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ $services->updated_at }}" readonly>
        </div>
    </div>
@endsection