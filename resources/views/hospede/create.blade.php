@extends('layouts.app')
  
@section('title', 'Adicionar Hospede')
  
@section('contents')
    <h1 class="mb-0">Caracteristicas do Quarto</h1>
    <hr />
    <form action="{{ route('hospede.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nome" class="form-control" placeholder="Nome do Hospede">
            </div>
            <div class="col">
                <input type="text" name="cpf" class="form-control" placeholder="Cpf do Hospede">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="rg" class="form-control" placeholder="Rg do Hospede">
            </div>
            <div class="col">
                <input type="text" name="despesa" class="form-control" placeholder="Despesa do Hospede">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nacionalidade" class="form-control" placeholder="Nacionalidade do Hospede">
            </div>
            <div class="col">
                <input type="text" name="comentarios" class="form-control" placeholder="Comentarios do Hospede">
            </div>
        </div>
        <div class="row mb-6">
            <div class="col">
                <input type="text" name="diaria" class="form-control" placeholder="Diaria do Hospede">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection