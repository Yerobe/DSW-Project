<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class OrderProductController extends Controller
{
    public function createOrderProduct($cesta, $idOrder){


        foreach($cesta as $producto){ // Recorremos toda la Cesta, introduciendo en la relación estos con el pedido
            DB::table('order_product')->insert([ 
                'id_Producto' => $producto->id_Product,
                'id_Pedido' => $idOrder,
                'amount' => $producto->amount
            ]);
        }

        

    }
}
