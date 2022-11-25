<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->integer('solicitud_id');
            $table->enum('tipo_solicitud', ['Seleccione...', 'Soporte', 'Incidencia', 'Requerimiento', 'Proyecto'])->default('Seleccione...');
            $table->string('descripcion_solicitud');
            $table->enum('prioridad', ['Seleccione...', 'Baja', 'Media', 'Alta'])->default('Seleccione...');
            //$table->enum('prioridad', ['Seleccione...', 'Baja', 'Media', 'Alta'])->nullable()->default(['Seleccione...']);
            $table->date('fecha_solicitud');
            $table->date('calidad_fecha_ini');
            $table->date('calidad_fecha_fin');
            $table->date('fecha_cierre');
            $table->string('porcentaje_avance');
            $table->enum('estatus', ['Seleccione...', 'Por iniciar', 'En proceso', 'En certificación', 'Suspendido', 'Anulado', 'Cerrado'])->default('Seleccione...');
            $table->enum('normativo', ['Seleccione...', 'Sí', 'No'])->default('Seleccione...');
            $table->string('crq_calidad');
            $table->string('crq_produccion');
            $table->enum('tipo_soporte', ['Seleccione...', 'Técnico', 'Funcional', 'Ambos'])->default('Seleccione...');
            $table->unsignedBigInteger('bl_solicitantes_id');
            $table->unsignedBigInteger('bl_libras_id');
            $table->unsignedBigInteger('bl_especialistas_id');
            $table->timestamps();

            $table->foreign('bl_solicitantes_id')->references('id')->on('bl_solicitantes')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('bl_libras_id')->references('id')->on('bl_libras')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('bl_solicitudes');
    }
}
