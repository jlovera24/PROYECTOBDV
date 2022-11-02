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
            $table->enum('estatus', ['Seleccione...', 'Activo', 'Inactivo'])->nullable()->default(['foo', 'bar']);
            $table->enum('ubicacion', ['Seleccione...', 'Activo', 'Guardia'])->nullable()->default(['foo', 'bar']);
            $table->enum('tipo_solicitud', ['Seleccione...', 'Soporte', 'Incidencia', 'Requerimiento', 'Proyecto'])->default('Seleccione...');
            $table->string('descripcion_solic');
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
        Schema::dropIfExists('bl_equipos');
    }
}
