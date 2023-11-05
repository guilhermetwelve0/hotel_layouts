@extends('layouts.app')
  
@section('title', 'Detalhes')
  
@section('contents')
    <h1 class="mb-0">Detalhes do Quarto</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID</label>
            <input type="text" name="id" class="form-control" placeholder="ID do Hospede" value="{{ rooms->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Hotel</label>
            <input type="text" name="hotel_id" class="form-control" placeholder="Hotel" value="{{ rooms->hotel_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Hóspede</label>
            <input type="text" name="guests_id" class="form-control" placeholder="Nome do Hóspede" value="{{ rooms->guests_id }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">RG do Hospede</label>
            <input type="text" name="room_id" class="form-control" placeholder="Quarto da Reserva" value="{{ rooms->room_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Check-in</label>
            <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in" value="{{ rooms->check_in_date }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Check-out</label>
            <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out" value="{{ rooms->check_out_date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Total</label>
            <input type="number" name="total" class="form-control" placeholder="Total da Reserva" value="{{ rooms->total }}" readonly>
        </div>
    </div>
    <div class="col mb-3">
            <label class="form-label">Funcionário</label>
            <input type="text" name="registered_by" class="form-control" placeholder="Funcionário" value="{{ rooms->registered_by }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-6">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status da Reserva" value="{{ rooms->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ rooms->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Utualizado em" value="{{ rooms->updated_at }}" readonly>
        </div>
    </div>
@endsection