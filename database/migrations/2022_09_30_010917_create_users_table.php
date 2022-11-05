<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('estates_id')->unsigned(); 
            
            $table->foreign('estates_id')->references('id')->on('estates'); 

            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('birthday');
            $table->string('sex');
            $table->string('location');
            $table->string('street');
            $table->integer('outdoor_number');
            $table->integer('indoor_number');
            $table->integer('postal_code');
            $table->string('between_streets');
            $table->string('password');
            
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
        Schema::dropIfExists('users');
    }
};
