@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes do Hóspede</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nome do Hóspede</label>
            <input type="text" name="name" class="form-control" placeholder="Nome do Hóspede" value="{{ $guests->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Sobrenome</label>
            <input type="text" name="last_name" class="form-control" placeholder="Sobrenome do Hóspede" value="{{ $guests->last_name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="CPF" value="{{ $guests->cpf }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="text" name="birthday" class="form-control" placeholder="Data de Nascimento" value="{{ $guests->birthday }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sexo</label>
            <input type="text" name="sex" class="form-control" placeholder="Sexo" value="{{ $guests->sex }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">CEP</label>
            <input type="text" name="cep" class="form-control" placeholder="CEP" value="{{ $guests->cep }}" readonly>
        </div>
    </div>
    <div class="row">
    <div class="col mb-3">
            <label class="form-label">Rua</label>
            <input type="text" name="street" class="form-control" placeholder="Rua" value="{{ $guests->street }}" readonly>
        </div>
    </div>
    <div class="row">
    <div class="col mb-3">
            <label class="form-label">Cidade</label>
            <input type="text" name="city" class="form-control" placeholder="Cidade" value="{{ $guests->city }}" readonly>
        </div>
    </div>
    <div class="row">
    <div class="col mb-3">
            <label class="form-label">Estado</label>
            <input type="text" name="state" class="form-control" placeholder="Estado" value="{{ $guests->state }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $guests->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="phone" class="form-control" placeholder="Telefone" value="{{ $guests->phone }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $guests->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ $guests->updated_at }}" readonly>
        </div>
    </div>
@endsection