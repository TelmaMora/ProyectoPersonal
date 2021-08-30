<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacionacademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RHT_formacionacademica', function (Blueprint $table) {
            $table->increments('id');
            $table->text('periodo');
            $table->text('nombre');
            $table->text('gradoEstudios');
            $table->text('situacion');
            $table->text('cedula');
            $table->date('fechaTitulacion');
            $table->text('rutaCedula');
            $table->text('rutaCertificado');
            $table->text('rutaTitulo');
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
        Schema::dropIfExists('RHT_formacionacademica');
    }
}
