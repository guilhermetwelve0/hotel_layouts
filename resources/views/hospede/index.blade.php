@extends('layouts.app')
  
@section('title', 'Listagem de Quartos')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Hospede</h1>
        <a href="{{ route('hospede.create') }}" class="btn btn-primary">Adicionar Hospede</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Despesa</th>
                <th>Nacionalidade</th>
                <th>Comentarios</th>
                <th>Diaria</th>
                <th>Acoes</th>
            </tr>
        </thead>
        <tbody>
            @if($hospede->count() > 0)
                @foreach($hospede as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nome }}</td>
                        <td class="align-middle">{{ $rs->cpf }}</td>
                        <td class="align-middle">{{ $rs->rg }}</td>
                        <td class="align-middle">{{ $rs->despesa }}</td>  
                        <td class="align-middle">{{ $rs->nacionalidade }}</td>  
                        <td class="align-middle">{{ $rs->comentarios }}</td>  
                        <td class="align-middle">{{ $rs->diaria }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('hospede.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalhes</a>
                                <a href="{{ route('hospede.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('hospede.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Hospede nao encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection