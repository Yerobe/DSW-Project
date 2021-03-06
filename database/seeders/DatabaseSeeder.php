<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Reservation;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        $this->call(CountriesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(OperatorsTableSeeder::class);
        $this->call(RegimesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(ReservesTableSeeder::class);

        Reservation::factory()->count(500)->create();

    }
}
