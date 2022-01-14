<?php

use App\Models\Pessoas;
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
        Pessoas::create([
            'nome' => 'Fernando Fagonde',
            'email' => 'fernando@alvoradadapaz.org.br',
            'login' => 'fernando',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);
        Pessoas::create([
            'nome' => 'Eliane Fagonde',
            'email' => 'eliane@alvoradadapaz.org.br',
            'login' => 'eliane',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);

        Pessoas::create([
            'nome' => 'Flávio Bitencourt',
            'email' => 'flavio@alvoradadapaz.org.br',
            'login' => 'flavio',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);
        Grupos::create([
            'nome'=>'Grupo Scheilla',
            'descricao'=>'Grupo de estudos da Doutrina Espírita Avançado',
            'dia_semana'=>6,
            'hora_inicio'=>'15:30',
            'hora_fim'=>'16:45',
        ]);

        Grupos::create([
            'nome'=>'Grupo de Estudo de O Livro dos Espíritos',
            'descricao'=>'Grupo de estudos de O Livro dos Espíritos. Obrigatório estar em outro grupo de ESDE',
            'dia_semana'=>6,
            'hora_inicio'=>'14:00',
            'hora_fim'=>'15:00 ',
        ]);

        Papeis::create([
            'nome'=>'Facilitador',
            'descricao'=>'Facilitador de Grupo de estudos'
        ]);

        Papeis::create([
            'nome'=>'Estudante',
            'descricao'=>'Estudante da Doutrina Espírita'
        ]);

        Papeis::create([
            'nome'=>'Expositor',
            'descricao'=>'Expositor Espírita'
        ]);
        
    }
}
