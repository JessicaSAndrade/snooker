<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = "partida";
    protected $fillable = [
        'partida_id',
        'data_partida',
        'tipo_partida'  
    ];
}
