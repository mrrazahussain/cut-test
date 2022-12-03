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
        Schema::create('priceranges', function (Blueprint $table) {
            $table->id();
            $table->string('price_range_name');
            $table->bigInteger('order_number');
            $table->bigInteger('range_minimum');
            $table->bigInteger('range_maximum');
            $table->bigInteger('status');
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
        Schema::dropIfExists('priceranges');
    }
};
