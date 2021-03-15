<?php

use App\Models\Pessoas;
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
            'email' => 'fernandofagonde@urcamp.edu.br',
            'login' => 'fernandofagonde',
            'senha' => '102030',
            'fl_ativo' => true,
        ]);
    }
}
