<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlSolicitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_solicitantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellido');
            $table->string('email');
            $table->unsignedBigInteger('bl_gerencias_id');
            $table->timestamps();

            $table->foreign('bl_gerencias_id')->references('id')->on('bl_gerencias')
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
        Schema::dropIfExists('bl_solicitantes');
    }
}
