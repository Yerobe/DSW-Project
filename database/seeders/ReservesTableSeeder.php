<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create(['reservastionNumber'=>'0303202101','bookDay'=>'2021/03/03', 'checkIn'=> '2021/03/03' 
        , 'checkOut'=> '2021/03/10' , 'adults'=> 2
        , 'children'=> 1 , 'pets'=> 0 , 'name'=> 'Jerobel Jose' , 'surname'=> 'Marrero Moreno' , 'phone'=> '722278659'
        , 'email'=> 'jmamor2016@gmail.com' , 'pricePaid'=> '0' , 'totalPrice'=> '100' , 'confirmed'=> 1 , 'id_Country'=> 1
        , 'id_Operator'=> 1 , 'id_Regime'=> 1, 'N_Apartament' => 201
        
        ]);
    }
}
