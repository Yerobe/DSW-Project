<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {

            $table->unsignedBigInteger('id_Producto');
            $table->unsignedBigInteger('id_Pedido');
            $table->smallInteger('amount');

            $table->primary(array('id_Producto', 'id_Pedido'));

            $table->foreign('id_Producto')->references('id')->on('products')->onDelete('restrict');
            $table->foreign('id_Pedido')->references('id')->on('orders')->onDelete('restrict');

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
        Schema::dropIfExists('order_product');
    }
}
