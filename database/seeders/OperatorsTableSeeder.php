<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operator::create(['name'=>'Booking','email'=>'booking@gmail.com', 'status'=>1]);
        Operator::create(['name'=>'Expedia','email'=>'Expedia@gmail.com', 'status'=>1]);
        Operator::create(['name'=>'Hotel Beds','email'=>'HotelBeds@gmail.com', 'status'=>1]);
        Operator::create(['name'=>'Meeting Point','email'=>'Meeting@gmail.com', 'status'=>1]);
        Operator::create(['name'=>'TripadVisor','email'=>'TripadVisor@gmail.com', 'status'=>1]);
        Operator::create(['name'=>'LogiTravel','email'=>'LogiTravel@gmail.com', 'status'=>1]);
    }
}
