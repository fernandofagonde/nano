<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    public $timestamps = false;

    protected $table = 'pessoas_grupos';

    protected $fillable = [
        'ref_grupo',
        'ref_pessoa',
        'ref_papel',
        'ref_situacao'

    ];

}
