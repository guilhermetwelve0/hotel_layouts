@extends('layouts.app')
  
@section('title', 'Adicionar Reserva')
  
@section('contents')
    <h1 class="mb-0">Características da Reserva</h1>
    <hr />
    <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
                <select name="guests_id" class="form-control">
                    <option value="">Selecionar Hóspede</option>
                @foreach($guests as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col">
                <select name="room_id" class="form-control">
                    <option value="">Selecionar Quarto</option>
                @foreach($rooms as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->room_no }}</option>
                @endforeach
                </select>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col">
                <label class="form-label">Data do Check-in</label>
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in">
        </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Data do Check-out</label>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <div class="input-group">
                <span class="input-group-text">R$</span>
                <input type="number" name="total" class="form-control" id="total" placeholder="Total da Reserva" step="0.01">
            </div>
        </div>
        </div>
        <div class="row mb-3">
    <div class="col">
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
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection