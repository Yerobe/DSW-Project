<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_products', function (Blueprint $table) {

            $table->unsignedBigInteger('id_Basket');
            $table->unsignedBigInteger('id_Product');

            $table->smallInteger('amount');

            $table->primary(array('id_Basket', 'id_Product'));

            $table->foreign('id_Basket')->references('id')->on('baskets')->onDelete('restrict');
            $table->foreign('id_Product')->references('id')->on('products')->onDelete('restrict');

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
        Schema::dropIfExists('basket_products');
    }
}
