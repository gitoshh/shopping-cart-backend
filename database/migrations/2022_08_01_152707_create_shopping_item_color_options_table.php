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
        Schema::create('shopping_item_color_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid()->unique();
            $table->string('color');
            $table->integer('price')->nullable();
            $table->string('image')->nullable();
            $table->integer('item_count');
            $table->foreignId('shopping_item_id')->constrained();
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
        Schema::dropIfExists('shopping_item_color_options');
    }
};
