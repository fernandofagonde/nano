<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Situacoes extends Model
{
    public $timestamps = false;

    protected $table = 'situacoes';

    protected $fillable = [
        'nome',
        'descricao',
    ];
}
