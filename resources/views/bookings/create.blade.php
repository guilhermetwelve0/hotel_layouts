@extends('layouts.app')
  
@section('title', 'Adicionar Reserva')
  
@section('contents')
    <h1 class="mb-0">Características da Reserva</h1>
    <hr />
    <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="hotel_id" class="form-control" placeholder="Hotel">
            </div>
            <div class="col">
                <input type="text" name="guests_id" class="form-control" placeholder="Nome do Hóspede">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="room_id" class="form-control" placeholder="Quarto da Reserva">
            </div>
            <div class="col">
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out">
            </div>
            <div class="col">
                <input type="number" name="total" class="form-control" placeholder="Total da Reserva">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="status" class="form-control" placeholder="Status da Reserva">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection