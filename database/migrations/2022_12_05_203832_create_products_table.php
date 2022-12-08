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
            $table->integer('modelos_id')->unsigned();
            $table->integer('categories_id')->unsigned(); 
            $table->integer('images_id')->unsigned(); 
           
            $table->foreign('marks_id')->references('id')->on('marks'); 
            $table->foreign('modelos_id')->references('id')->on('modelos'); 
            $table->foreign('categories_id')->references('id')->on('categories'); 
            $table->foreign('images_id')->references('id')->on('images');

            $table->string('product');
            $table->string('description');
            $table->float('price');
            $table->integer('stock');
            
            $table->timestamps();
            $table->softDeletes();
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
