@extends('layouts.app')
  
@section('title', 'Adicionar Hóspede')
  
@section('contents')
    <h1 class="mb-0">Caracteristicas do Hóspede</h1>
    <hr />
    <form action="{{ route('guests.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
    <div class="col">
        <input type="text" name="name" class="form-control" placeholder="Nome do Hóspede">
    </div>
    <div class="col">
        <input type="text" name="last_name" class="form-control" placeholder="Sobrenome do Hóspede">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="text" name="cpf" class="form-control" placeholder="CPF do Hóspede">
    </div>
    <div class="col">
        <input type="date" name="birthday" class="form-control" placeholder="Data de Nascimento">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <select name="sex" class="form-control">
            <option value=" ">Sexo do Hóspede</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
        </select>
    </div>
    <div class="col">
        <input type="text" name="cep" class="form-control" placeholder="CEP">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="text" name="street" class="form-control" placeholder="Endereço">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="text" name="city" class="form-control" placeholder="Cidade">
    </div>
    <div class="col">
        <input type="text" name="state" class="form-control" placeholder="Estado">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="email" name="email" class="form-control" placeholder="Email do Hóspede">
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <input type="tel" name="phone" class="form-control" placeholder="Telefone do Hóspede">
    </div>
</div>


        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection