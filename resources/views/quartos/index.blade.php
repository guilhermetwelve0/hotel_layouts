@extends('layouts.app')
  
@section('title', 'Listagem de Quartos')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Quartos</h1>
        <a href="{{ route('quartos.create') }}" class="btn btn-primary">Adicionar Quartos</a>
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
                <th>Preco</th>
                <th>Andar</th>
                <th>Numero</th>
                <th>Acoes</th>
            </tr>
        </thead>
        <tbody>
            @if($quartos->count() > 0)
                @foreach($quartos as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nome }}</td>
                        <td class="align-middle">{{ $rs->preco }}</td>
                        <td class="align-middle">{{ $rs->andar }}</td>
                        <td class="align-middle">{{ $rs->numero }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('quartos.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalhes</a>
                                <a href="{{ route('quartos.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('quartos.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
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
                    <td class="text-center" colspan="5">Quarto nao encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection