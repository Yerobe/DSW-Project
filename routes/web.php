<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReserveAccountController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => 'true']);

Route::get('/inicio', function () { // Redireccionamiento hacía la Pagina de Logueo
    return view('login');
});


Route::get('reserva/update_status/{id}', [ReserveAccountController::class, 'modifyUpdateStatus'])/*->middleware(['password.confirm'])*/;









Route::group(['middleware' => 'web'], function () {

    /*
    Route::get('/', function () {
        return view('welcome');
    })->middleware(['password.confirm']);*/



   Route::get('/',[HomeController::class, 'getHome']); // Usuario Asociados a Reservas

   Route::get('/employees/login',[EmployeeController::class, 'showLoginForm']);
   Route::post('/employees/login',[EmployeeController::class, 'login']);

   Route::get('/employees/register',[EmployeeController::class, 'showRegisterForm']);
   Route::post('/employees/register',[EmployeeController::class, 'create']);


   Route::get('/employees/area',[EmployeeController::class, 'secret']);



   





   /* Route::get('/home', function () { 
        return view('logueado');
    });*/

});








Route::get('/welcome', function () {
    return view('welcome');
});







//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
