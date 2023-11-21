@extends('layouts.app')
  
@section('title', 'Adicionar Hóspede')
  
@section('contents')
    <h1 class="mb-0">Dados do Hóspede</h1>
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
                <input type="text" name="cep" class="form-control" placeholder="CEP" id="cep">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="street" class="form-control" placeholder="Endereço" id="street">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="Cidade" id="city">
            </div>
    </div>    
<div class="row mb-3">
    <div class="col">
        <select name="state" class="form-control" id="state">
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
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
    
        <!-- Script JavaScript para preencher automaticamente os campos do endereço -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cep').on('input', function() {
                var cep = $(this).val().replace(/[^0-9]/, '');

                if (cep.length === 8) {
                    $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function(data) {
                        if (!data.erro) {
                            // Preencha os campos de endereço automaticamente
                            console.log(data); // Verifique os dados no console para diagnóstico
                            $('#street').val(data.logradouro);
                            $('#city').val(data.localidade);
                            $('#state').val(data.uf);
                        } else {
                            console.log('Erro ao obter dados do CEP.');
                        }
                    });
                }
            });
        });

        setTimeout(function() {
            $('#error-message').alert('close');
        }, 5000);
    </script>
@endsection