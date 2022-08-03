<?php

use App\Models\Usuarios;
use App\Models\Grupos;
use App\Models\Papeis;
use Illuminate\Database\Seeder;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuarios::create([
            'nome' => 'Fernando Fagonde',
            'email' => 'fernando@ipsillon.cc',
            'login' => 'fernando',
            'telefone'=>'53999028504',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);

        Usuarios::create([
            'nome' => 'Leandro Pires',
            'email' => 'leandro@ipsillon.cc',
            'login' => 'leandro',
            'telefone'=>'53981172281',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);
        
    }
}
