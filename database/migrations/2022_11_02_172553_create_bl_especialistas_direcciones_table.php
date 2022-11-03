<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlEspecialistasDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_especialistas_direcciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bl_direcciones_id');
            $table->unsignedBigInteger('bl_especialistas_id');
            $table->timestamps();

            $table->foreign('bl_direcciones_id')->references('id')->on('bl_direcciones')
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
        Schema::dropIfExists('bl_especialistas_direcciones');
    }
}
