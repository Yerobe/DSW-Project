<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReserveAccountController;
use App\Http\Controllers\BasketProductController;
use App\Http\Controllers\OrderController;

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


Route::group(['middleware' => 'web'], function () {

    
Route::group(['middleware' => 'verified'], function () {


    Route::get('/',[HomeController::class, 'getHome'])->middleware(['password.confirm']); // Usuario Asociados a Reservas
    Route::get('/home',[HomeController::class, 'getHome'])->middleware(['password.confirm']); // Usuario Asociados a Reservas

    
   Route::post('/add/basket/{id_producto}/{id_cesta}',[BasketProductController::class, 'insertBasketProduct'])->middleware(['password.confirm']); // Registramos el Producto al Carrito con este Id y del Usuario
   Route::delete('/delete/basket/{id_producto}/{id_cesta}',[BasketProductController::class, 'deleteBasketProduct'])->middleware(['password.confirm']);

   Route::post('/add/order/{id_cuenta}',[OrderController::class,'insertOrder'])->middleware(['password.confirm']); // El Cliente crea un pedido)


   Route::get('/products',[HomeController::class,'goProducts'])->middleware(['password.confirm']); // El Cliente crea un pedido)

});
    /* Trabajadores */
});


Route::get('/employees/login',[EmployeeController::class, 'showLoginForm']); // Sistema Login de Trabajadores :: GET
Route::post('/employees/login',[EmployeeController::class, 'login']); // Sistema Login de Trabajadores :: POST

Route::get('/employees/register',[EmployeeController::class, 'showRegisterForm']); // Registrar Trabajadores, esto pertenece al PMS :: GET
Route::post('/employees/register',[EmployeeController::class, 'create']); // Registrar Trabajadores, esto pertenece al PMS :: POST


Route::get('/employees/area',[EmployeeController::class, 'secret']); // Direccionamiento Para Trabajadores, haciendo uso de Middleware Secret
Route::get('/reserva/update_status/{id}', [ReserveAccountController::class, 'modifyUpdateStatus'])/*->middleware(['password.confirm'])*/;



