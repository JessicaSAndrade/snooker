<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $table = "jogador";
    protected $fillable = [
        'id',
        'jogador_id',
        'nome_jogador',
        'partida_id'
    ];

    public function it_partida(){
        return $this->hasMany(It_Partida::class);
    }
}
