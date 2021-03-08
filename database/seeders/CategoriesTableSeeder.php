<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Refreshments', 'description' => 'Enjoy your best 330 ml refreshing drinks', 'imagen' => 'https://www.baarty.com/articulos/wp-content/uploads/2013/02/el-mundo-de-los-refrescos.jpg']);
        Category::create(['name' => 'Coffees', 'description' => 'Try a delicious coffee', 'imagen' => 'https://pymstatic.com/30549/conversions/tipos-de-cafe-thumb.jpg']);
        Category::create(['name' => 'Juices', 'description' => 'Try a delicious Juices', 'imagen' => 'http://curacaochronicle.com/wp-content/uploads/2013/12/Natural-Juices.jpg']);
        Category::create(['name' => 'Pastries', 'description' => 'Show off your pastries, so much variety comes in', 'imagen' => 'https://fundaciondelcorazon.com/images/stories/corazon-facil/impulso-vital/bolleria-istock_000005686668xsmall.jpg']);
        Category::create(['name' => 'Drinks', 'description' => 'Satisfy your thirst quickly and pleasantly', 'imagen' => 'https://www.theraflu.com/amp/img/why-drink-fluids-when-sick/theraflu-why-its-so-important-to-drink-fluids-when-youre-sick-mobile.jpg']);
        Category::create(['name' => 'Sandwiches', 'description' => 'Eat breakfast in a simple way, like a lifetime', 'imagen' => 'https://www.divinacocina.es/wp-content/uploads/sandwich-blt.jpg']);
        Category::create(['name' => 'Salads', 'description' => 'Stay fit by eating green', 'imagen' => 'https://i2.wp.com/theculinarycook.com/wp-content/uploads/2019/05/types-of-salad-cobb.jpg?fit=900%2C600&ssl=1']);
        Category::create(['name' => 'Menus', 'description' => 'The Special Menu', 'imagen' => 'https://okdiario.com/img/2020/12/01/desayuno-saludable-2-655x368.jpg']);

    }
}
