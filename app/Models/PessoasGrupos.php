<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PessoasGrupos extends Model
{
    public $timestamps = false;

    protected $table = 'pessoas_grupos';

    protected $fillable = [
        'ref_grupo',
        'ref_pessoa',
        'ref_papel',
        'ref_situacao'
    ];

    public function getParticipantes($grupo){
        return $this->ref_grupo;
    }
    

}
