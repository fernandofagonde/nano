<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pessoas extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'login',
        'senha',
        'ativo',
        'administrador'
    ];

    protected $hidden = [
        'senha',
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'administrador' => 'boolean',
        
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

    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = so_numero($value);
    }

    public function getFlAtivoFormatadoAttribute()
    {
        return $this->attributes['ativo'] ? 'Sim' : 'Não';
    }

    public function getFlAdminFormatadoAttribute()
    {
        return $this->attributes['administrador'] ? 'Sim' : 'Não';
    }
    
    public function getDtCriacaoFormatadoAttribute()
    {
        return timestamp_bra($this->attributes['created_at']);
    }

    public function getTelefoneFormatadoAttribute()
    {
        return formata_telefone($this->attributes['telefone']);
    }
}
