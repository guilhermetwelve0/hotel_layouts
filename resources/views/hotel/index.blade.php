@extends('layouts.app')

@section('title', 'Hotéis')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Hotéis</h1>
        <a href="{{ route('hotel.create') }}" class="btn btn-dark">Adicionar Hotel</a>
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
                <th>Andar</th>
                <th>Número do Quarto</th>
                <th>Tipo do Quarto</th>
                <th>Descrição</th>
                <th>Status da Reserva</th>
            </tr>
        </thead>
        <tbody>
        @if($hotel->count() > 0)
                @foreach($hotel as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->floor }}</td>
                        <td class="align-middle">{{ $rs->room_no }}</td>
                        <td class="align-middle">{{ $rs->room_type_id }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">{{ $rs->status_reservation }}</td>  
                        <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('hotel.show', $rs->id) }}" class="btn btn-secondary">
                            <i class="fas fa-info-circle"></i></a>
                            <a href="{{ route('hotel.edit', $rs->id)}}" class="btn btn-warning">
                            <i class="fas fa-edit"></i></a>
                            <form action="{{ route('hotel.destroy', $rs->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
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
                    <td class="text-center" colspan="5">Hotel não encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
