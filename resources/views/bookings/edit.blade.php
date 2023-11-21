@extends('layouts.app')
  
@section('title', 'Edição')
  
@section('contents')
    <h1 class="mb-0">Editar Reserva</h1>
    <hr />
    <form action="{{ route('bookings.update', $bookings->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
        <label class="form-label">Hóspede</label>
        <select name="guest" class="form-control">
            <option value="">Selecionar Hóspede</option>
            @foreach($guests as $guest)
                <option value="{{ $guest->id }}" {{ $bookings->guest->id == $guest->id ? 'selected' : '' }}>
                    {{ $guest->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Quarto da Reserva</label>
        <select name="room" class="form-control">
            <option value="">Selecionar Quarto da Reserva</option>
            @foreach($rooms as $room)
                <option value="{{ $room->id }}" {{ $bookings->room->id == $room->id ? 'selected' : '' }}>
                    {{ $room->room_no }}
                </option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
            <div class="col mb-3">
                <label class="form-label">Data do Check-in</label>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in" value="{{ $bookings->check_in_date }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Data do Check-out</label>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out" value="{{ $bookings->check_out_date }}" >
            </div>
            </div>
            <div class="row">
            <div class="col mb-3">
                <label class="form-label">Total da Reserva</label>
                <input type="number" name="total" class="form-control" placeholder="Total da Reserva" value="{{ $bookings->total }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">Status da Reserva</label>
        <select name="status" class="form-control">
            <option value=" ">Status da Reserva</option>
            <option value="Confirmada">Confirmada</option>
            <option value="Pré-Reservada">Pré-Reservada</option>
            <option value="Check-in">Check-in</option>
            <option value="Check-out">Check-out</option>
            <option value="No Show">No Show</option>
            <option value="Cancelada">Cancelada</option>
        </select>
    </div>
    </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection