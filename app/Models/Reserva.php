<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'total',
        'guests_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'status',
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guests_id');
    }
    
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}

