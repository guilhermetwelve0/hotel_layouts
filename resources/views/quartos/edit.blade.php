@extends('layouts.app')
  
@section('title', 'Edicao')
  
@section('contents')
    <h1 class="mb-0">Edicao de Quarto</h1>
    <hr />
    <form action="{{ route('quartos.update', $quartos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Quarto" value="{{ $quartos->nome }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Preco</label>
                <input type="text" name="preco" class="form-control" placeholder="Preco do Quarto" value="{{ $quartos->preco }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Andar</label>
                <input type="text" name="andar" class="form-control" placeholder="Andar do quarto" value="{{ $quartos->andar }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Numero</label>
                <input type="text" name="numero" class="form-control" placeholder="Numero do Quarto" value="{{ $quartos->numero }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection