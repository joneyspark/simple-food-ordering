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
        Schema::create('food_items', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->mediumText('ingredients');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->string('photo');
            $table->integer('rating');
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
        Schema::dropIfExists('food_items');
    }
};
