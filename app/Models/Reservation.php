<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ReserveAccount;

class Reservation extends Model
{
    use HasFactory;

    public function profile() {

        return $this->hasOne(ReserveAccount::class);
       
       }
}
