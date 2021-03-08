<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReserveAccount;
use App\Models\Reservation;
use App\Models\Product;
use App\Models\Basket;
use App\Models\BasketProduct;
use App\Models\Category;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function getHome()

    {

        $cesta = Basket::where('id_Cuenta', auth('web')->user()->id)->count(); // Me permite saber si es la 1 vez que se loguea, para crearle la Cesta


        if ($cesta == 0) { // En caso de que no tenga Cesta, se la creamos
            Basket::create([
                'id_Cuenta' => auth('web')->user()->id,
            ]);
        }

        $id_Cesta = Basket::where('id_Cuenta', auth('web')->user()->id)->get();
        $id_Cesta = $id_Cesta[0]['id']; // Obtenemos el Id de la Cesta asociada a la Cuenta


        $cuenta = array( // Datos de Cuenta del Usuario
            'points' => auth('web')->user()->points,
            'IdCuenta' => auth('web')->user()->id,
            'IdCesta' => $id_Cesta
        );

        $cesta_completa =  BasketProduct::where('id_Basket', $id_Cesta)->get(); // Obtnemos Valores de Cesta [ID]

        $cantidad_productos =  BasketProduct::where('id_Basket', $id_Cesta)->count(); // Obtnemos Valores de Cesta [ID-PRODUCT]

        $detalles_cesta = array();



        for ($i = 0; $i < $cantidad_productos; $i++) {

            $id_producto = $cesta_completa[$i]['id_Product']; // Obtenemos el Id del Producto que se encuentra en la Cesta del Usuario

            $nombre_producto = Product::where('id', $id_producto)->first(); // Obtenemos los datos del Producto mediante el ID



            $puntos_cosumir = $nombre_producto['precio'] * $cesta_completa[$i]['amount']; // Calculamos los puntos [Cantidad * Precio]


            /* Creamos Arrays dentro del Array por Cada Producto */

            $detalles_cesta['producto' . $i]['name'] = $nombre_producto['name'];
            $detalles_cesta['producto' . $i]['precio'] = $puntos_cosumir;
            $detalles_cesta['producto' . $i]['imagen'] = $nombre_producto['imagen'];
            $detalles_cesta['producto' . $i]['id'] = $nombre_producto['id'];
            $detalles_cesta['producto' . $i]['amount'] = $cesta_completa[$i]['amount'];
        }


        $id_Reserva = auth('web')->user()->idReserve; // Recogemos el Identificador asociado a la Cuenta de la Reserva, ya que esta es la Entidad Débil

        $reserva = Reservation::where('id', $id_Reserva)->first(); // Buscamos en Nombre de la Reserva asociada

        $menuses = Product::where('id_Categoria', 8) // Recogemos los Menus, param mostrarlos en la Vista
            ->orderBy('name')
            ->get();


        $categories = Category::where('id', '<>', 8)->get(); // No obtengo los Menus, ya que los recogí anteriormente


        $cantidad_productos =  Product::where('id_Categoria', '<>', 8)->count(); // Calculamos las Categorías

        $array_productos = array();

        for ($i = 1; $i <= $cantidad_productos; $i++) {
            $productos = Product::where('id', $i)->first();
            array_push($array_productos, $productos);
        }



        return view('home')->with(
            array(
                'reserva' => $reserva,
                'menuses' => $menuses,
                'cuenta' => $cuenta,
                'detalles_cesta' => $detalles_cesta,
                'categories' => $categories,
                'array_productos' => $array_productos,
            )
        );
    }



    public function goProducts(Request $request)
    {

        $texto = trim($request->get('texto')); //Lo cogemos por URL (método GET)

        $arrayProduct = DB::table('products') // Realizamos la Búsqueda

            ->select()

            ->where('name', 'LIKE', '%' . $texto . '%')->simplepaginate(9); // Paginación de 9, ya que tenemos filas de 3

        return view('products', compact('arrayProduct', 'texto'));


    }
}
