<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
        {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:employee')->except('logout');
        }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password','status');

        $credentials = [
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'status' => 1,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }else{
            $request->session()->put('Error', 'Wrong account or Disabled'); // Uso Put ya que flash, no me funciona
            return redirect("/"); // Caso de Error
        }
    }


}
