@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes do Hospede</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nome do Hospede</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome do Hospede" value="{{ $hospede->nome }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">CPF do Hospede</label>
            <input type="text" name="cpf" class="form-control" placeholder="CPF do Hospede" value="{{ $hospede->cpf }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">RG do Hospede</label>
            <input type="text" name="rg" class="form-control" placeholder="RG do Hospede" value="{{ $hospede->rg }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Despesa do Hospede</label>
            <input type="text" name="despesa" class="form-control" placeholder="Despesa do Hospede" value="{{ $hospede->despesa }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nacionalidade do Hospede</label>
            <input type="text" name="nacionalidade" class="form-control" placeholder="Nacionalidade do Hospede" value="{{ $hospede->nacionalidade }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Comentarios do Hospede</label>
            <input type="text" name="comentarios" class="form-control" placeholder="Comentarios do Hospede" value="{{ $hospede->comentarios }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-6">
            <label class="form-label">Diaria do Hospede</label>
            <input type="text" name="diaria" class="form-control" placeholder="Diaria do Hospede" value="{{ $hospede->diaria }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $hospede->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ $hospede->updated_at }}" readonly>
        </div>
    </div>
@endsection