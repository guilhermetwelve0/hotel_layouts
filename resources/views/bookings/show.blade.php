@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes da Reserva</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Hotel</label>
            <input type="text" name="hotel_id" class="form-control" placeholder="Hotel" value="{{ bookings->hotel_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Hóspede</label>
            <input type="text" name="guests_id" class="form-control" placeholder="Nome do Hóspede" value="{{ bookings->guests_id }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">RG do Hospede</label>
            <input type="text" name="room_id" class="form-control" placeholder="Quarto da Reserva" value="{{ bookings->room_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Check-in</label>
            <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in" value="{{ bookings->check_in_date }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Check-out</label>
            <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out" value="{{ bookings->check_out_date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Total</label>
            <input type="number" name="total" class="form-control" placeholder="Total da Reserva" value="{{ bookings->total }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-6">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status da Reserva" value="{{ bookings->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ bookings->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ bookings->updated_at }}" readonly>
        </div>
    </div>
@endsection