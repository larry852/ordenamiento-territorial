<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->char('gender', 200)->nullable();
            $table->string('phone')->nullable();
            $table->string('institution')->nullable();
            $table->boolean('is_active');
            $table->date('last_login')->nullable();
            $table->date('date_joined');
            $table->boolean('is_staff');            
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
