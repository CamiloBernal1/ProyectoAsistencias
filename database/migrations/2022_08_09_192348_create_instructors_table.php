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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('nombreInst'); 
            $table->string('apellidoInst');
            $table->string('tipoDoc');
            $table->integer('numDoc');
            $table->string('correoMisena');
            $table->integer('telefonoInst');
            $table->integer('idTematica');
            $table->integer('idPrograma');
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
        Schema::dropIfExists('instructors');
    }
};
