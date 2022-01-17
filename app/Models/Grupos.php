<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    public $timestamps = false;

    protected $table = 'grupos';

    protected $fillable = [
        'nome',
        'descricao',
        'dia_semana',
        'hora_inicio',
        'hora_fim',

    ];

    public function grupos_pessoas(){
        return $this->belongsToMany('App\Models\GruposPessoas');
    }

}
