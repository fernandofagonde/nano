<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Papeis extends Model
{
    public $timestamps = false;

    protected $table = 'papeis';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function grupos()
    {
        return $this->belongsToMany('\App\Models\Grupos', 'grupos_papeis_pessoas');
    }
    
    public function pessoas()
    {
        return $this->belongsToMany('\App\Models\Pessoas', 'grupos_papeis_pessoas');
    }   
    

}
