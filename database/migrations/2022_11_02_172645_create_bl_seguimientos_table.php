<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_seguimientos', function (Blueprint $table) {
            $table->id();
            $table->string('detalle');
            $table->date('fecha_detalle');
            $table->unsignedBigInteger('bl_solicitudes_id');
            $table->timestamps();

            $table->foreign('bl_solicitudes_id')->references('id')->on('bl_solicitudes')
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
        Schema::dropIfExists('bl_seguimientos');
    }
}
