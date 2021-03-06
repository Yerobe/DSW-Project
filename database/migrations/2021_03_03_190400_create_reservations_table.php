<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('reservastionNumber');
            $table->date('bookDay');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->smallInteger('adults');
            $table->smallInteger('children');
            $table->smallInteger('pets');
            $table->string('name',40); // 40 de longitud, debido al Factory
            $table->string('surname', 40);
            $table->string('phone',40)->nullable();
            $table->string('email')->nullable();
            $table->float('pricePaid');
            $table->float('totalPrice');
            $table->string('comment')->nullable();
            $table->boolean('confirmed');
            $table->timestamps();

            $table->unsignedBigInteger('id_Country'); //Foránea del País
            $table->unsignedBigInteger('id_Operator'); //Foránea del Operador
            $table->unsignedBigInteger('id_Regime'); //Foránea del Régimen
            $table->char('N_Apartament',3); //Foránea del Apartamento

            /* == En el caso de que eliminemos la reserva, que nunca se realizaría ya que mantiene el Status, no deberemos de Borrar otras Tablas == */
            
            $table->foreign('id_Country')->references('id')->on('countries')->onDelete('restrict');
            $table->foreign('id_Operator')->references('id')->on('operators')->onDelete('restrict');
            $table->foreign('id_Regime')->references('id')->on('regimes')->onDelete('restrict');
            $table->foreign('N_Apartament')->references('number')->on('rooms')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
