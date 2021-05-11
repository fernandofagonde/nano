<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pessoas extends Authenticatable
{
    use Notifiable;

    const CREATED_AT = 'dt_criacao';
    const UPDATED_AT = 'dt_modificacao';

    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'login',
        'senha',
        'fl_ativo',
        'fl_admin',
    ];

    protected $hidden = [
        'senha',
    ];

    protected $casts = [
        'fl_ativo' => 'boolean',
        'fl_admin' => 'boolean',
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
        return $this->attributes['fl_ativo'] ? 'Sim' : 'Não';
    }

    public function getFlAdminFormatadoAttribute()
    {
        return $this->attributes['fl_admin'] ? 'Sim' : 'Não';
    }

    public function getFlLoginFormatadoAttribute()
    {
        return $this->attributes['fl_login'] ? 'Sim' : 'Não';
    }

    public function getDtCriacaoFormatadoAttribute()
    {
        return timestamp_bra($this->attributes['dt_criacao']);
    }

    public function getTelefoneFormatadoAttribute()
    {
        return formata_telefone($this->attributes['telefone']);
    }
}
