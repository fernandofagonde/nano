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
            'email' => 'fernando@alvoradadapaz.org.br',
            'login' => 'fernando',
            'senha' => '123456',
            'fl_ativo' => true,
            'fl_admin' => true,
            'fl_login' => true,
        ]);
    }
}
