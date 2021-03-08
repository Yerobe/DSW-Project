<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasketProduct; // Tabla N:M entre Cesta y Productos
use Illuminate\Support\Facades\DB;

class BasketProductController extends Controller
{
    public function insertBasketProduct($id_producto, $id_cesta, Request $request) // Insertato Productos en la Cesta
    {

        $producto_en_cesta = BasketProduct::where('id_Basket', $id_cesta) // Comprobamos si ya existe este producto en la cesta
            ->where('id_Product', $id_producto)
            ->count();

        if ($producto_en_cesta == 1) { // En caso de que este Usuario ya tenga en la cesta este producto, aumentamos Cantidad

            $cestaProducto = BasketProduct::where('id_Basket', $id_cesta)
                ->where('id_Product', $id_producto)
                ->get();

            BasketProduct::where('id_Basket', $id_cesta)
                ->where('id_Product', $id_producto)
                ->update(['amount' => $cestaProducto[0]['amount'] + 1]); // Cantidad de Producto + 1
        } else {
            BasketProduct::create([ // En el caso de que no exista por lo cual Cantidad = 0, creamos esta
                'id_Basket' => $id_cesta,
                'id_Product' => $id_producto,
                'amount' => 1,
            ]);
        }

        $request->session()->flash('Cesta_Insertada', 'You have added a Product to the Basket'); // Mensaje Flash
        return back()->withInput();
    }


    public function deleteBasketProduct($id_producto, $id_cesta, Request $request) // Eliminamos un Producto de la Cesta
    {

         BasketProduct::where('id_Basket',$id_cesta)
        ->where('id_Product',$id_producto)
        ->delete();
        

        $request->session()->flash('Cesta_Eliminada', 'You have remove a Product to the Basket');
        return redirect('home');


    }


    public function removeBasket($id_cesta){
        DB::table('basket_products')->where('id_Basket', '=', $id_cesta)->delete(); // Limoiamos la cesta completa [Cuando se hace compra]
    }


}
