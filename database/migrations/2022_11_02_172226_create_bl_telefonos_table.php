<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_telefonos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->enum('operadora', ['Seleccione...', '0412', '0424', '0414', '0426', '0416', '0212',])->default('Seleccione...');
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
        Schema::dropIfExists('bl_telefonos');
    }
}
