<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Papeis extends Model
{
    public $timestamps = false;

    protected $table = 'papeis';

    protected $fillable = [
        'nome',
        'descricao',
    ];
}
