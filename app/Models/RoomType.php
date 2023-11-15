<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<<< HEAD:app/Models/Quartos.php
class Quartos extends Model
========
class RoomType extends Model
>>>>>>>> branch-vitor:app/Models/RoomType.php
{
    use HasFactory;

    protected $fillable = [
<<<<<<<< HEAD:app/Models/Quartos.php
        'nome',
        'preco',
        'andar',
        'numero',
        'photo'
========
        'id',
        'name',
        'slug',
        'price',
        'description',
        'thumbnail',
>>>>>>>> branch-vitor:app/Models/RoomType.php
    ];
}
