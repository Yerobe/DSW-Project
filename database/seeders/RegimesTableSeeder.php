<?php

namespace Database\Seeders;

use App\Models\Regime;
use Illuminate\Database\Seeder;

class RegimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regime::create(['name'=>'Only Bed','description'=>'Only Room without pension']);
        Regime::create(['name'=>'Breakfast','description'=>'Have Breakfast']);
        Regime::create(['name'=>'Half Board','description'=>'Have Breakfast and Dinner']);
        Regime::create(['name'=>'Full Board','description'=>'Have Breakfast, Launch and Dinner']);
        Regime::create(['name'=>'All Inclusive','description'=>'The Client has everything Inclusive']);
    }
}
