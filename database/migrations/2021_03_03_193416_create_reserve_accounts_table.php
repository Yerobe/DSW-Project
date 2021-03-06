<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('points');
            $table->boolean('status'); // 1 = Activo
            $table->unsignedBigInteger('idReserve');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

           
            $table->foreign('idReserve')->references('id')->on('reservations')->onDelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_accounts');
    }
}
