@extends('layouts.app')
  
@section('title', 'Edicao')
  
@section('contents')
    <h1 class="mb-0">Edicao do hospede</h1>
    <hr />
    <form action="{{ route('bookings.update', $bookings->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ID</label>
                <input type="text" name="id" class="form-control" placeholder="ID do Hóspede" value="{{ $bookings->id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Hotel</label>
                <input type="text" name="hotel_id" class="form-control" placeholder="Hotel" value="{{ $bookings->hotel_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Hóspede</label>
                <input type="text" name="guests_id" class="form-control" placeholder="Nome do Hóspede" value="{{ $bookings->guests_id }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Quarto</label>
                <input type="text" name="room_id" class="form-control" placeholder="Quarto da Reserva" value="{{ $bookings->room_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Check-in</label>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in" value="{{ $bookings->check_in_date }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out" value="{{ $bookings->check_out_date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Total</label>
                <input type="number" name="total" class="form-control" placeholder="Total da Reserva" value="{{ $bookings->total }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status da Reserva" value="{{ $bookings->status }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection