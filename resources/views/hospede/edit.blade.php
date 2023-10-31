@extends('layouts.app')
  
@section('title', 'Edicao')
  
@section('contents')
    <h1 class="mb-0">Edicao do hospede</h1>
    <hr />
    <form action="{{ route('hospede.update', $hospede->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Hospede" value="{{ $hospede->nome }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" placeholder="CPF do hospede" value="{{ $hospede->cpf }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">RG</label>
                <input type="text" name="rg" class="form-control" placeholder="RG do hospede" value="{{ $hospede->rg }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Despesa</label>
                <input type="text" name="despesa" class="form-control" placeholder="Despesa do hospede" value="{{ $hospede->despesa }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nacionalidade</label>
                <input type="text" name="nacionalidade" class="form-control" placeholder="Nacionalidade do hospede" value="{{ $hospede->nacionalidade }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Comentarios</label>
                <input type="text" name="comentarios" class="form-control" placeholder="Comentarios do hospede" value="{{ $hospede->comentarios }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Despesa</label>
                <input type="text" name="despesa" class="form-control" placeholder="Despesa do hospede" value="{{ $hospede->despesa }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection