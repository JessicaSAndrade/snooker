<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class It_Partida extends Model
{
    protected $table = "jogador";
    protected $fillable = [
        'jogador_id',
        'nome_jogador',
        'partida_id'
    ];

    public function jogadores(){
        return $this->belongsToMany(Jogador::class);
    }
}
