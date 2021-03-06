<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['ISO'=>'AF', 'name'=>'Afganistán']);
        Country::create(['ISO'=>'AL', 'name'=>'Albania']);
        Country::create(['ISO'=>'DE', 'name'=>'Alemania']);
        Country::create(['ISO'=>'AD', 'name'=>'Andorra']);
        Country::create(['ISO'=>'AR', 'name'=>'Argentina']);
        Country::create(['ISO'=>'AU', 'name'=>'Australia']);
        Country::create(['ISO'=>'AT', 'name'=>'Austria']);
        Country::create(['ISO'=>'BS', 'name'=>'Bahamas']);
        Country::create(['ISO'=>'BE', 'name'=>'Bélgica']);
        Country::create(['ISO'=>'BR', 'name'=>'Brasil']);
        Country::create(['ISO'=>'CA', 'name'=>'Canada']);
        Country::create(['ISO'=>'CN', 'name'=>'China']);
        Country::create(['ISO'=>'CO', 'name'=>'Colombia']);
        Country::create(['ISO'=>'ES', 'name'=>'España']);
        Country::create(['ISO'=>'US', 'name'=>'Estados Unidos']);
        Country::create(['ISO'=>'FR', 'name'=>'Francia']);
        Country::create(['ISO'=>'FI', 'name'=>'Finlandia']);
        Country::create(['ISO'=>'GB', 'name'=>'Reino Unido']);
       

    }
}
