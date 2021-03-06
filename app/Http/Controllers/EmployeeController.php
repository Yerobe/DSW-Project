<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{


    use AuthenticatesUsers;


    protected $loginView = 'employees.login';



    function __construct()
    {
        $this->middleware('auth:employee',['only' => ['secret']]);
    }

   public function showLoginForm()
   {

       return view('employees.login');
   }


   public function login(Request $request)
   {


      $credentials = $request->only('email', 'password');

      $credentials = [
          'email' => $credentials['email'],
          'password' => $credentials['password'],
      ];

      if (Auth::guard('employee')->attempt($credentials)) {
          return redirect()->intended('home');
      }else{
          $request->session()->put('Error', 'Wrong account or Disabled'); // Uso Put ya que flash, no me funciona
          return redirect("employees/login"); // Caso de Error
      }

   }


   public function showRegisterForm()
   {

       return view('employees.register');
   }

   protected function create(Request $request)
    {

        

             Employee::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'nif' => '78821497Z',
                'surname' => 'Marrero',
                'name' => 'Yerobe',
            ]);

            return view('orders');
        
    }


   public function secret(){
       return 'Hola ' . auth('employee')->user()->name;
   }

}
