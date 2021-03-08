<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use App\Models\ReserveAccount;
use App\Models\Reservation;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;

class EmployeeController extends Controller
{


    use AuthenticatesUsers;


    protected $loginView = 'employees.login';



    function __construct()
    {
        $this->middleware('auth:employee',['only' => ['secret']]);
    }

   public function showLoginForm() // Muestra el Formulario de Sesión
   {

    return view('employees.login');
   }


   public function login(Request $request) // COmprobación de Credenciales, haciendo uso de Herramientas UI
   {


      $credentials = $request->only('email', 'password');

      $credentials = [
          'email' => $credentials['email'],
          'password' => $credentials['password'],
      ];

      if (Auth::guard('employee')->attempt($credentials)) {
             return redirect('/employees/area');
      }else{
          $request->session()->put('Error', 'Wrong account or Disabled'); // Uso Put ya que flash, no me funciona
          return redirect("employees/login"); // Caso de Error
      }

   }


   public function showRegisterForm() // Mostrar el formulario de Registro
   {

       return view('employees.register');
   }

   protected function create(Request $request) // Nos permite crear un Usuario.
    {

        

             Employee::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'nif' => '78821497Z',
                'surname' => 'Marrero',
                'name' => 'Yerobe',
            ]);

            return redirect('/employees/area');
        
    }


   public function secret(){ // Método secreto


       return view('employees.administration');
   }

}
