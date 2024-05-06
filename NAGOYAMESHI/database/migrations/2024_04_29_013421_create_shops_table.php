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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('price_under')->unsigned();
            $table->integer('price_over')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('open_our');
            $table->integer('close_our');
            $table->string('postal_code')->default(' ');
            $table->text('address');
            $table->string('phone')->default(' ');
            $table->string('holiday');
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
        Schema::dropIfExists('shops');
    }
};
