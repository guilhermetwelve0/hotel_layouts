@extends('layouts.app')

@section('title', 'Tipos de Quartos')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista dos Tipos de Quartos</h1>
        <a href="{{ route('room_types.create') }}" class="btn btn-dark">Adicionar Tipo de Quarto</a>
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
                <th>Nome do Quarto</th>
                <th>URL</th>
                <th>Preço do Quarto</th>
                <th>Descrição</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
        @if($room_types->count() > 0)
                @foreach($room_types as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>  
                        <td class="align-middle">{{ $rs->slug }}</td>  
                        <td class="align-middle">{{ $rs->price }}</td>  
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">{{ $rs->thumbnail }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('room_types.show', $rs->id) }}" class="btn btn-secondary">
                            <i class="fas fa-info-circle"></i></a>
                            <a href="{{ route('room_types.edit', $rs->id)}}" class="btn btn-warning">
                            <i class="fas fa-edit"></i></a>
                            <form action="{{ route('room_types.destroy', $rs->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
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
                <tr>
                    <td class="text-center" colspan="5">Tipo de quarto não encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
