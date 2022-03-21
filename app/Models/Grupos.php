<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    public $timestamps = false;

    protected $table = 'grupos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'descricao',
        'dia_semana',
        'hora_inicio',
        'hora_fim',
    ];

    public function pessoas()
    {
        return $this->belongsToMany('\App\Models\Pessoas', 'grupos_papeis_pessoas');
    }

    public function papeis()
    {
        return $this->belongsToMany('\App\Models\Papeis', 'grupos_papeis_pessoas');
    }

}
