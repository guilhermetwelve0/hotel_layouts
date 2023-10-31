@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes do Quarto</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nome do Quarto</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome do Quarto" value="{{ $quartos->nome }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Preco do Quarto</label>
            <input type="text" name="preco" class="form-control" placeholder="Preco do Quarto" value="{{ $quartos->preco }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Andar do Quarto</label>
            <input type="text" name="andar" class="form-control" placeholder="Andar do Quarto" value="{{ $quartos->andar }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Numero do Quarto</label>
            <input type="text" name="numero" class="form-control" placeholder="Numero do Quarto" value="{{ $quartos->numero }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $quartos->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ $quartos->updated_at }}" readonly>
        </div>
    </div>
@endsection