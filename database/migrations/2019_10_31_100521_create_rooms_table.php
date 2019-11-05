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
            $table->string('listing_name')->nullable();
            $table->string('summary')->nullable();
            $table->string('home_type')->nullable();
            $table->string('room_type')->nullable();
            $table->tinyInteger('accomodate')->nullable();
            $table->tinyInteger('bedroom_count')->nullable();
            $table->tinyInteger('bathroom_count')->nullable();
            $table->Integer('price')->nullable();
            $table->double('latitude', 8, 2)->nullable();
            $table->double('longitude', 8, 2)->nullable();
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
