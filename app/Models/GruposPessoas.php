<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GruposPessoas extends Model
{
    public $timestamps = false;

    protected $table = 'grupos_pessoas';

    protected $fillable = [
        'grupos_id',
        'pessoas_id',
        'papeis_is',
        'ref_situacao'
    ];

    public function getParticipantes($grupo){
        return $this->ref_grupo;
    }
    
    public function grupo(){
        $this->belongsTo('App\Models\Grupos');
    }

    public function grupos(){
        return $this->belongsToMany('App\Models\Grupos');
    } 

    public function pessoa(){
        $this->belongsTo('App\Models\Pessoas');
    }

    public function pessoas(){
        return $this->belongsToMany('App\Models\Pessoas');
    } 
    public function papel(){
        $this->belongsTo('App\Models\Papeis');
    }

    public function papeis(){
        return $this->belongsToMany('App\Models\Papeis');
    }  

}
