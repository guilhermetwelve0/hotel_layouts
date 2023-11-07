@extends('layouts.app')
  
@section('title', 'Editar')
  
@section('contents')
    <h1 class="mb-0">Editar Hóspede</h1>
    <hr />
    <form action="{{ route('guests.update', $guests->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome do Hóspede" value="{{ $guests->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Sobrenome</label>
                <input type="text" name="last_name" class="form-control" placeholder="Sobrenome do Hóspede" value="{{ $guests->last_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">CPF</label>
                <input type="number" name="cpf" class="form-control" placeholder="CPF do Hóspede" value="{{ $guests->cpf }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Data de Nascimento</label>
                <input type="date" name="birthday" class="form-control" placeholder="Data de Nascimento" value="{{ $guests->birthday }}" >
            </div>
            <div class="row mb-3">
            <label class="form-label">Sexo do Hóspede</label>
                <select name="sex" class="form-control">
                    <option value=" ">Sexo do Hóspede</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                    </select>
                </div>
            </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">CEP</label>
                <input type="number" name="cep" class="form-control" placeholder="CEP do Hóspede" value="{{ $guests->cep }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Rua</label>
                <input type="text" name="street" class="form-control" placeholder="Rua do Hóspede" value="{{ $guests->street }}" >
            </div>
        </div>
        <div class="col mb-3">
                <label class="form-label">Cidade</label>
                <input type="text" name="city" class="form-control" placeholder="Cidade do Hóspede" value="{{ $guests->city }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Estado</label>
                <input type="text" name="state" class="form-control" placeholder="Estado da Hóspede" value="{{ $guests->state }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email do Hóspede" value="{{ $guests->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="phone" class="form-control" placeholder="Telefone do Hóspede" value="{{ $guests->phone }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection