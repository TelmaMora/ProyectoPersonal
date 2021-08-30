<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RHT_plaza', function (Blueprint $table) {
            $table->increments('id');
            $table->string('UNI');
            $table->string('categoria');
            $table->string('tipoMov');
            $table->string('Diagonal');
            $table->integer('horas');
            $table->integer('horasNombramiento');
            $table->integer('personal')->unsigned();;
            $table->foreign("personal")
                    ->references("id")
                    ->on("RHT_complementoPersonal")
                    ->onDelete("cascade")
                    ->onUpdate("cascade");
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
        Schema::dropIfExists('RHT_plaza');
    }
}
