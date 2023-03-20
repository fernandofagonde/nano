<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposPapeisPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_papeis_pessoas', function (Blueprint $table) {
            
            $table->foreignId('pessoas_id')->constrained();
            $table->foreignId('grupos_id')->constrained();
            $table->foreignId('papeis_id')->constrained();
            $table->timestamps();
            $table->unique(['pessoas_id', 'grupos_id', 'papeis_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_papeis_pessoas');
        
    }
}

