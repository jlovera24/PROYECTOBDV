<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlEspecialistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_especialistas', function (Blueprint $table) {
            $table->id();
            $table->string('nm_ct');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula');
            $table->date('fech_nacimiento');
            $table->date('fecha_ing');
            $table->date('fecha_ing_dpto');
            $table->string('email');         
            $table->unsignedBigInteger('bl_cargos_id');
            $table->unsignedBigInteger('bl_ubicaciones_fisicas_id');
            $table->unsignedBigInteger('bl_gerencias_id');
            $table->unsignedBigInteger('bl_telefonos_id');
            $table->unsignedBigInteger('bl_direcciones_id');
            $table->timestamps();

            $table->foreign('bl_cargos_id')->references('id')->on('bl_cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('bl_ubicaciones_fisicas_id')->references('id')->on('bl_ubicaciones_fisicas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('bl_gerencias_id')->references('id')->on('bl_gerencias')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('bl_telefonos_id')->references('id')->on('bl_telefonos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('bl_direcciones_id')->references('id')->on('bl_direcciones')
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
        Schema::dropIfExists('bl_especialistas');
    }
}
