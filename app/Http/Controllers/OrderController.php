<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ReserveAccountController;
use App\Http\Controllers\OrderProductController;
use App\Http\Requests\OrderFormRequest;

class OrderController extends Controller
{


    public function insertOrder($id_cuenta, OrderFormRequest $request)
    {
       
        $id_cesta_usuario = DB::table('baskets')->where('Id_Cuenta','=',$id_cuenta)->first(); // Obtenemos la Cesta [ID]
       
        $cesta_usuario = DB::table('basket_products')->where('id_Basket','=',$id_cesta_usuario->id)->get(); // Obtenemos la Cesta con Los Productos y Cantidades


        $puntos_totales_cobrados = 0;

        foreach($cesta_usuario as $producto){
            $producto_nuevo = DB::table('products')->where('id','=',$producto->id_Product)->first(); // Obtengo el Producto
            $puntos_totales_cobrados = $puntos_totales_cobrados + $producto_nuevo->precio * $producto->amount; // Obtengo el Precio de la tabla productos y lo multiplico por el Amount de la cesta a la vez que lo sumo todo para calcular el total del pedido. [Esto, lo podría a ver pasado por la vista ya que lo hice en el HomeController, pero quería hacer uso de QueryBuilder para ello]
        }
       
    

      
        $id_order = DB::table('orders')->insertGetId([ // Crearemos el Pedido
            'fecha_entrega' => $request['fecha_recogida'], 
            'hora_entrega' => $request['hora_recogida'], 
            'puntos_cobrados' => $puntos_totales_cobrados,
            'accion' => $request['accion'],
            'id_Cuenta'=> $id_cuenta
        ]);

       
        app(ReserveAccountController::class)->updatePointsAccount($puntos_totales_cobrados, $id_cuenta); // Actualizamos los Puntos del Usuario
        app(OrderProductController::class)->createOrderProduct($cesta_usuario, $id_order); // Creamos la relación N:M entre Orders y Productos
        
        app(BasketProductController::class)->removeBasket($id_cesta_usuario->id); // Una vez realizado el pedido Borraremos la Cesta


        $request->session()->push('Pedido_Realizado', 'Order Placed');
        return redirect('home');

        


        
    }
}
