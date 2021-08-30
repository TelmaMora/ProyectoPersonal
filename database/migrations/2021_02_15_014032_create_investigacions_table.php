<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RHT_investigacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('año');
            $table->text('nombre');
            $table->text('presentado');
            $table->text('indexado');
            $table->text('ligaMemoria');
            $table->text('articulo');
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
        Schema::dropIfExists('RHT_investigacion');
    }
}