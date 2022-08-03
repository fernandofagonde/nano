<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Clientes extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'clientes';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
        'titulo',
        'descricao',
        'logo',
        'fundo',
        'url', 
        'font_color','button_color','button_font_color'
    ];

}
