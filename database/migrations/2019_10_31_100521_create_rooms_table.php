<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('listing_name');
            $table->string('summary');
            $table->string('home_type');
            $table->string('room_type');
            $table->tinyInteger('accomodate');
            $table->tinyInteger('bedroom_count');
            $table->tinyInteger('bathroom_count');
            $table->Integer('price');
            $table->double('latitude', 8, 2);
            $table->double('longitude', 8, 2);
            $table->timestamps();
            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('rooms');
    }
}
