<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GruposPessoas extends Model
{
    public $timestamps = false;

    protected $table = 'grupos_papeis_pessoas';

    protected $fillable = [
        'grupos_id',
        'pessoas_id',
        'papeis_id',
        'ref_situacao'
    ];

}
