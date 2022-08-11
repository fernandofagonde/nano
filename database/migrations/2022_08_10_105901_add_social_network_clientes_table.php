<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialNetworkClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
        $table->string('facebook')->nullable();
        $table->string('youtube')->nullable();        
        $table->string('instagram')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('whatsapp')->nullable();
        $table->string('site')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
