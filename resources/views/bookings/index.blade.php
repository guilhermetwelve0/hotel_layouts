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
                        <td class="align-middle">{{ $rs->guest->name }}</td>
                        <td class="align-middle">{{ $rs->room->room_no }}</td>
                        <td class="align-middle">{{ $rs->check_in_date }}</td>
                        <td class="align-middle">{{ $rs->check_out_date }}</td>
                        <td class="align-middle">R$ {{ number_format($rs->total, 2, ',', '.') }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>  
                        <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('bookings.show', $rs->id) }}" class="btn btn-secondary">
                            <i class="fas fa-info-circle"></i></a>
                            <a href="{{ route('bookings.edit', $rs->id)}}" class="btn btn-warning">
                            <i class="fas fa-edit"></i></a>
                            <form action="{{ route('bookings.destroy', $rs->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
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
