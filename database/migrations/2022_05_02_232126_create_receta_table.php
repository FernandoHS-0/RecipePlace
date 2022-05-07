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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->integer('idUsuario');
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('tiempo');
            $table->text('ingredientes');
            $table->text('instrucciones');
            $table->string('categoria');
            $table->string('multimedia');
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
        Schema::dropIfExists('receta');
    }
};
