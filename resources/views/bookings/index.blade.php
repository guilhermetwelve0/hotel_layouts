@extends('layouts.app')

@section('title', 'Reservas')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Reservas</h1>
        <a href="{{ route('bookings.create') }}" class="btn btn-dark">Adicionar Reserva</a>
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
                <th>Hotel</th>
                <th>Hóspede</th>
                <th>Quarto</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Custo Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @if($bookings->count() > 0)
                @foreach($bookings as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->hotel_id }}</td>
                        <td class="align-middle">{{ $rs->guests_id }}</td>
                        <td class="align-middle">{{ $rs->room_id }}</td>
                        <td class="align-middle">{{ $rs->check_in_date }}</td>  
                        <td class="align-middle">{{ $rs->check_out_date }}</td>  
                        <td class="align-middle">{{ $rs->total }}</td>  
                        <td class="align-middle">{{ $rs->status }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('bookings.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalhes</a>
                                <a href="{{ route('bookings.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('bookings.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
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
                    <td class="text-center" colspan="5">Reserva não encontrada</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
