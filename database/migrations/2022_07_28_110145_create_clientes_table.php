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
            $table->text('titulo');
            $table->text('url');
            $table->text('razao');
            $table->text('cpf_cnpj');
            $table->text('email')->nullable();
            $table->text('whatsapp')->nullable();
	        $table->text('endereco')->nullable();
            $table->text('descricao')->nullable();
            $table->text('logo')->nullable();
            $table->text('fundo')->nullable();
            $table->string('font_color')->nullable();
            $table->string('button_color')->nullable();
            $table->string('button_font_color')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();        
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('site')->nullable();
            $table->string('area')->nullable();  
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
