<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReserveAccount;
use Illuminate\Support\Facades\DB;



class ReserveAccountController extends Controller
{

    function __construct()
    {
        $this->middleware('auth:employee',['only' => ['modifyUpdateStatus']]);
    }


    public function modifyUpdateStatus($id)
    {


        ReserveAccount::where('id', '=', $id)->update(['status' => 1, 'idReserve' => 1]); // El idReserve, se cogería de forma automática en el PMS

        return redirect('home');

        /* Este método, nos debería redireccionar al apartado donde nos encontramos modificando la reserva,
        y el propio sistema comprueba de la existencia de este correo en otra reserva antigua, con lo cual,
        se sustiruye el botón de Create Account, por un botón Enable Account, de esta manera, el cliente
        si regresa al Hotel, no deberá de volver a verificar su cuenta, si no que podrá usar su cuenta mismamente
        verificada e inclusive con la misma contraseña

        Esto se debe, a que en el caso de que un cliente, realice una reserva por día, porque no sabe cuando
        realizará su Check-OUT, no tendrá que estar de forma continuada verificandose 
        
        También, crearemos un nuevo mensaje Session, para indicarle al trabajador [recepcionista], que esta cuenta
        ya se ha habilitado.

        */

        // return view('reserva/edit', array('reserve' => Reservation::findOrFail($id)));
    }


    public function updatePointsAccount($puntos_gastados, $usuario){

        $cuenta_usuario = DB::table('reserve_accounts')->where('id','=',$usuario)->first(); // Recogemos los datos de este para obtener los puntos

        $puntos_restantes = $cuenta_usuario->points - $puntos_gastados; // Calculamos el resultado


        DB::table('reserve_accounts') // Actualizamos los Puntos del usuario
                ->where('id', $usuario)
                ->update(['points' => $puntos_restantes]);


    }
}
