<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplementoPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('RHT_complementoPersonal', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaNac');
            $table->string('SNI');
            $table->string('estadoNac');
            $table->string('ciudadNac');
            $table->string('estadoCivil');
            $table->string('areaAdscripcion');
            $table->text('funcion');
            $table->integer('numTarjeta');
            $table->integer('ingreso')->unsigned();;
            $table->foreign('ingreso')->references('id')->on('rth_ingreso');
            $table->integer('contacto')->unsigned();;
            $table->foreign('contacto')->references('id')->on('rht_contacto');
            $table->integer('conyugue')->unsigned();;
            $table->foreign('conyugue')->references('id')->on('rht_conyugue');
            $table->integer('personal')->unsigned();;
            $table->foreign('personal')->references('id')->on('rht_personal');
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
        Schema::dropIfExists('RHT_complementoPersonal');
    }
}
