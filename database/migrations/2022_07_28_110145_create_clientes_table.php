<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->text('email');
            $table->text('telefone')->nullable();
	        $table->text('endereco')->nullable();
            $table->text('titulo')->nullable();
            $table->text('descricao')->nullable();
            $table->text('logo')->nullable();
            $table->text('fundo')->nullable();
            $table->text('url')->nullable();

            
            
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
