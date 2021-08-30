<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RHT_contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle');
            $table->integer('numero');
            $table->string('colonia');
            $table->integer('codigoPostal');
            $table->string('estado');
            $table->string('municipio');
            $table->string('celular');
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
        Schema::dropIfExists('RHT_contacto');
    }
}
