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
        'logo'
    ];

    /**
     * Get the password for the user
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->attributes['senha'];
    }

    /**
     * Overrides the method to ignore the remember token
     *
     * @param string $key
     * @param mixed $value
     */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();

        if (!$isRememberTokenAttribute) {
            parent::setAttribute($key, $value);
        }
    }

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = so_numero($value);
    }

    
    public function getDtCriacaoFormatadoAttribute()
    {
        return timestamp_bra($this->attributes['created_at']);
    }

    public function getTelefoneFormatadoAttribute()
    {
        return formata_telefone($this->attributes['telefone']);
    }

    public function grupos()
    {
        return $this->belongsToMany('\App\Models\Grupos', 'grupos_papeis_clientes');
    }
    
    public function papeis()
    {
        return $this->belongsToMany('\App\Models\Papeis', 'grupos_papeis_clientes');
    }

}
