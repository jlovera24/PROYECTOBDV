<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_equipos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_equipo');
            $table->string('estatus');
            $table->string('ubicacion');
            //$table->enum('estatus', ['Seleccione...', 'Activo', 'Inactivo'])->default('Seleccione...');
            //$table->enum('ubicacion', ['Seleccione...', 'Puesto de Trabajo', 'Guardia remota'])->default('Seleccione...');
            $table->string('serial');
            $table->unsignedBigInteger('bl_especialistas_id');
            $table->timestamps();

            $table->foreign('bl_especialistas_id')->references('id')->on('bl_especialistas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bl_equipos');
    }
}

