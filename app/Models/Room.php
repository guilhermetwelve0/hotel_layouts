<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'floor',
        'room_no',
        'room_type_name',
        'description',
        'status_reservation',
    ];
}
