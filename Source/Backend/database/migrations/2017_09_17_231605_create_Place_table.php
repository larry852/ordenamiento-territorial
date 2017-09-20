<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Place', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('name');
            $table->integer('dane');
            $table->string('flag');
            $table->integer('pattern');
            $table->foreign('pattern')->references('id')->on('Place');
            
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