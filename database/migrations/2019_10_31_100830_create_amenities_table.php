<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('has_tv');
            $table->tinyInteger('has_kitchen');
            $table->tinyInteger('has_internet');
            $table->tinyInteger('has_heating');
            $table->tinyInteger('has_air_conditioning');
            $table->unsignedInteger('room_id');
            $table->timestamps();
            $table->foreign('room_id')
                  ->references('id')->on('rooms')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenities');
    }
}
