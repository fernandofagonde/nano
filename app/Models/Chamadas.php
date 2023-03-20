<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    public $timestamps = false;

    protected $table = 'chamadas';

    protected $fillable = [
        'nome',
        'descricao',
        'dia_semana',
        'hora_inicio',
        'hora_fim',

    ];

}
