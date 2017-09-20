<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Location', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('latitude_start', 10, 2);
            $table->decimal('latitude_end', 10, 2);
            $table->decimal('longitude_start', 10, 2);
            $table->decimal('longitude_end', 10, 2);
            $table->string('description')->nullable();
            $table->integer('id_zone');
            $table->foreign('id_zone')->references('id')->on('Zone'); //opcional
            
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
        //
    }
}
