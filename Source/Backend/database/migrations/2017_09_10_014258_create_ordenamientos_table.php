<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('ano');
            $table->string('simbolo');
            $table->string('cobertura');
            $table->string('uso');
            $table->string('area_hectareas');
            $table->string('localizacion');
            $table->string('codigo_dane');
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
        Schema::dropIfExists('ordenamientos');
    }
}
