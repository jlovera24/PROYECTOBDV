<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_direcciones', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('bl_especialistas_id');
            //$table->unsignedBigInteger('bl_ciudades_id');
            //$table->unsignedBigInteger('bl_estados_id');
            //$table->unsignedBigInteger('bl_parroquias_id');
            //$table->unsignedBigInteger('bl_municipios_id');
            $table->timestamps();

            $table->foreign('bl_especialistas_id')->references('id')->on('bl_especialistas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            //$table->foreign('bl_ciudades_id')->references('id')->on('bl_ciudades')
            //      ->onUpdate ('cascade')
            //      ->onDelete ('cascade');  

            //$table->foreign('bl_estados_id')->references('id')->on('bl_estados')
            //      ->onUpdate ('cascade')
            //      ->onDelete ('cascade');     

            //$table->foreign('bl_parroquias_id')->references('id')->on('bl_parroquias')
            //      ->onUpdate ('cascade')
            //      ->onDelete ('cascade');

            //$table->foreign('bl_municipios_id')->references('id')->on('bl_municipios')
            //      ->onUpdate ('cascade')
            //      ->onDelete ('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bl_direcciones');
    }
}
