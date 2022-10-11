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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marks_id')->unsigned(); 
            $table->integer('models_id')->unsigned();
            $table->integer('categories_id')->unsigned(); 

            $table->foreign('marks_id')->references('id')->on('marks'); 
            $table->foreign('models_id')->references('id')->on('models'); 
            $table->foreign('categories_id')->references('id')->on('categories'); 

            $table->string('product');
            $table->string('description');
            $table->float('price');
            $table->integer('stock');
            $table->string('photo');
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
        Schema::dropIfExists('products');
    }
};
