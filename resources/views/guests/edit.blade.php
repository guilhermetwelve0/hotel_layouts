@extends('layouts.app')
  
@section('title', 'Editar')
  
@section('contents')
    <h1 class="mb-0">Editar Hóspede</h1>
    <hr />
    <form action="{{ route('guests.update', $guests->id) }}" method="POST">
        @csrf
        @method('PUT')
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
            <div class="col mb-3">
                <label class="form-label">Data de Nascimento</label>
                <input type="date" name="birthday" class="form-control" placeholder="Data de Nascimento" value="{{ $guests->birthday }}" >
            </div>
            <div class="col mb-3">
            <label class="form-label">Sexo do Hóspede</label>
                <select name="sex" class="form-control">
                    <option value=" ">Sexo do Hóspede</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                    </select>
                </div>
            <div class="col mb-3">
                <label class="form-label">CEP</label>
                <input type="number" name="cep" class="form-control" placeholder="CEP do Hóspede" value="{{ $guests->cep }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Rua</label>
                <input type="text" name="street" class="form-control" placeholder="Rua do Hóspede" value="{{ $guests->street }}" >
            </div>
        <div class="col mb-3">
                <label class="form-label">Cidade</label>
                <input type="text" name="city" class="form-control" placeholder="Cidade do Hóspede" value="{{ $guests->city }}" >
            </div>
            <div class="col mb-3">
            <label class="form-label">Estado</label>
            <select name="state" class="form-control">
                <option value=" ">Estado</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
    </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email do Hóspede" value="{{ $guests->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="phone" class="form-control" placeholder="Telefone do Hóspede" value="{{ $guests->phone }}" >
            </div>
            <div class="col mb-3">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection