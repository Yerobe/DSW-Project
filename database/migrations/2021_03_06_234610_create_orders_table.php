<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_entrega');
            $table->time('hora_entrega', $precision = 0);
            $table->unsignedBigInteger('id_Cuenta'); //Foránea de la Cuenta de Usuario Utilizada
            $table->integer('puntos_cobrados'); // Puntos Cobrados, de este modo, podriamos evaluar que clientes consumen mas y en que fechas = BigData
            $table->enum('accion',['llevar', 'recoger']);
            $table->timestamps();

            $table->foreign('id_Cuenta')->references('id')->on('reserve_accounts')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
