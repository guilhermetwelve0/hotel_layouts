@extends('layouts.app')

@section('title', 'Hóspedes')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Hóspedes</h1>
        <a href="{{ route('guests.create') }}" class="btn btn-dark">Adicionar Hóspedes</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>CEP</th>
                <th>Rua</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
        @if($guests->count() > 0)
                @foreach($guests as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->last_name }}</td>
                        <td class="align-middle">{{ $rs->cpf }}</td>  
                        <td class="align-middle">{{ $rs->birthday }}</td>  
                        <td class="align-middle">{{ $rs->sex }}</td>  
                        <td class="align-middle">{{ $rs->cep }}</td>  
                        <td class="align-middle">{{ $rs->street }}</td> 
                        <td class="align-middle">{{ $rs->city }}</td> 
                        <td class="align-middle">{{ $rs->state }}</td> 
                        <td class="align-middle">{{ $rs->email }}</td>                        
                        <td class="align-middle">{{ $rs->phone }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('guests.show', $rs->id) }}" class="btn btn-secondary">
                            <i class="fas fa-info-circle"></i></a>
                            <a href="{{ route('guests.edit', $rs->id)}}" class="btn btn-warning">
                            <i class="fas fa-edit"></i></a>
                            <form action="{{ route('guests.destroy', $rs->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
                                @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
            @endif
        </tbody>
    </table>
@endsection
