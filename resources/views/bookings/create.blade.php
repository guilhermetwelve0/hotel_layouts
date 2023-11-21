@extends('layouts.app')
  
@section('title', 'Adicionar Reserva')
  
@section('contents')
    <h1 class="mb-0">Dados da Reserva</h1>
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
                <select name="room_id" class="form-control" onchange="updateTotal(this)">
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
                <input type="date" name="check_in_date" class="form-control" placeholder="Data do Check-in" id="check_in_date" onchange="updateTotal(this)">
        </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Data do Check-out</label>
                <input type="date" name="check_out_date" class="form-control" placeholder="Data do Check-out" id="check_out_date" onchange="updateTotal(this)">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <div class="input-group">
                <span class="input-group-text">R$</span>
                <input type="number" name="total" class="form-control" id="total" placeholder="Total da Reserva" step="0.01" readonly>
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

<script>
    function updateTotal() {
        var checkInDate = new Date(document.getElementById('check_in_date').value);
        var checkOutDate = new Date(document.getElementById('check_out_date').value);

        var roomPrice = 0;

        if (!isNaN(checkInDate.getTime()) && !isNaN(checkOutDate.getTime())) {
            var roomId = document.getElementsByName('room_id')[0].value;
            var selectedRoom = @json($rooms);
            roomPrice = parseFloat(selectedRoom.find(room => room.id == roomId).price);

            var timeDiff = Math.abs(checkOutDate.getTime() - checkInDate.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            var totalPrice = diffDays * roomPrice;

            document.getElementById('total').value = totalPrice.toFixed(2);
        } else {
            document.getElementById('total').value = roomPrice;
        }
    }

</script>
@endsection