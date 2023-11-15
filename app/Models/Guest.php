<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'cpf',
        'birthday',
        'sex',
        'cep',
        'street',
        'city',
        'state',
        'email',
        'phone',

    ];
}
