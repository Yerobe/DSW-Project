<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

  
   protected $fillable = [
       'id',
       'fecha_entrega',
       'hora_entrega',
       'id_Cuenta',
       'puntos_cobrados',
       'accion',
   ];
}
