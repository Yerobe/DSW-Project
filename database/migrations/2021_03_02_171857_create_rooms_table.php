<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->char('number',3)->primary();
            $table->enum('type', ['normal', 'superior']);
            $table->enum('level', ['down', 'above']);
            $table->enum('bath', ['shower plate', 'bathtub']);
            $table->boolean('pets');;
            $table->boolean('disabled');
            $table->enum('status', ['cleansed', 'dirty', 'locked', 'occupied']);
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
        Schema::dropIfExists('rooms');
    }
}
