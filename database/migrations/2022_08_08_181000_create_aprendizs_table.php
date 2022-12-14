<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombreAprend');
            $table->string('apelliAprend');
            $table->char('tipoDoc');
            $table->integer('numDoc');
            $table->string('correoMisena');
            $table->string('correoAprend');
            $table->integer('telefonoAprend');
            $table->integer('idFicha');
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
        Schema::dropIfExists('aprendizs');
    }
};
