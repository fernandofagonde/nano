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
            'telefone'=>'53999028504',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);
        Pessoas::create([
            'nome' => 'Eliane Fagonde',
            'email' => 'eliane@alvoradadapaz.org.br',
            'login' => 'eliane',
            'telefone'=>'53991416522',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);

        Pessoas::create([
            'nome' => 'Flávio Bitencourt',
            'email' => 'flavio@alvoradadapaz.org.br',
            'telefone'=>'53999991448',
            'login' => 'flavio',
            'senha' => '123456',
            'ativo' => true,
            'administrador' => true, 
        ]);

        /**
         * Grupos
         */
        
        //Segunda
        Grupos::create(['nome'=>'Grupo Maria de Magdala','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>1,'hora_inicio'=>'20:00','hora_fim'=>'21:00 ',]);
        Grupos::create(['nome'=>'Grupo Luiz Sérgio','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>1,'hora_inicio'=>'20:00','hora_fim'=>'21:00 ',]);        
        //Terça
        Grupos::create(['nome'=>'Grupo Peixotinho','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>2,'hora_inicio'=>'20:00','hora_fim'=>'21:00 ',]);
        //Quarta
        Grupos::create(['nome'=>'Grupo André Luiz','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>3,'hora_inicio'=>'18:00','hora_fim'=>'19:00 ',]);
        //Quinta
        Grupos::create(['nome'=>'Grupo João Batista','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>4,'hora_inicio'=>'20:00','hora_fim'=>'21:00 ',]);
        Grupos::create(['nome'=>'Grupo Amelia Rodrigues','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>4,'hora_inicio'=>'20:00','hora_fim'=>'21:00 ',]);                
        //sábado
        Grupos::create(['nome'=>'Grupo Scheilla','descricao'=>'Grupo de estudos da Doutrina Espírita Avançado','dia_semana'=>6,'hora_inicio'=>'15:30','hora_fim'=>'16:45',]);
        Grupos::create(['nome'=>'Grupo de Estudo de O Livro dos Espíritos','descricao'=>'Grupo de estudos de O Livro dos Espíritos. Obrigatório estar em outro grupo de ESDE','dia_semana'=>6,'hora_inicio'=>'14:00','hora_fim'=>'15:00 ',]);
        Grupos::create(['nome'=>'Grupo Chico Xavier','descricao'=>'Grupo de Estudos da Doutrina Espírita - ESDE','dia_semana'=>6,'hora_inicio'=>'14:15','hora_fim'=>'15:15 ',]);        
        Grupos::create(['nome'=>'Grupo Joanna de Angelis ','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>6,'hora_inicio'=>'14:00','hora_fim'=>'15:00 ',]);        
        Grupos::create(['nome'=>'Grupo Estudo da Mediunidade','descricao'=>'Grupo de Estudos da Doutrina Espírita','dia_semana'=>6,'hora_inicio'=>'14:00','hora_fim'=>'15:00 ',]);        
        

        /**
         * Pessoas
         */
         
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
