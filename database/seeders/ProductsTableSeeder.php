<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;



class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Refrescos

        Product::create(['name'=>'Coca Cola', 'precio'=>150, 'imagen' => 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/02/coca-cola-portada-1877741.jpg?itok=7aBLounI', 'description' => "Enjoy the taste of one of the best refreshing drinks of the moment. You can enjoy it at all times in a comfortable way thanks to its new design.", 'id_Categoria' => 1]); 
        Product::create(['name'=>'Fanta', 'precio'=>150, 'imagen' => 'https://www.cocacola.es/content/dam/GO/fanta-2gen/ES/Productos/BodegonFanta_800x654.jpg','description' => "Enjoy the taste of one of the best refreshing drinks of the moment. You can enjoy it at all times in a comfortable way thanks to its new design.",'id_Categoria' => 1]); 
        Product::create(['name'=>'Nestea', 'precio'=>150, 'imagen' => 'https://www.cocacola.es/content/dam/GO/nestea/spain/home/NESTEA_WEB%20800X654%20botellas%20(2).png','description' => "Enjoy the taste of one of the best refreshing drinks of the moment. You can enjoy it at all times in a comfortable way thanks to its new design.",'id_Categoria' => 1]); 
        Product::create(['name'=>'Red Bull', 'precio'=>250, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC4f9IxjjlmZ5XOzmgSUQFN1tARswnI_FvoQ&usqp=CAU','description' => "Enjoy the taste of one of the best refreshing drinks of the moment. You can enjoy it at all times in a comfortable way thanks to its new design.",'id_Categoria' => 1]); 
        Product::create(['name'=>'Monster', 'precio'=>150, 'imagen' => 'https://www.distribucionmayorista.online/238-large_default/monster-verde-500ml.jpg','description' => "Enjoy the taste of one of the best refreshing drinks of the moment. You can enjoy it at all times in a comfortable way thanks to its new design.",'id_Categoria' => 1]); 
        Product::create(['name'=>'7Up', 'precio'=>150, 'imagen' => 'https://www.alimarket.es/media/images/2019/detalle_art/298605/97970_high_original.png','description' => "Enjoy the taste of one of the best refreshing drinks of the moment. You can enjoy it at all times in a comfortable way thanks to its new design.",'id_Categoria' => 1]); 

        // Cafés

        Product::create(['name'=>'Only Coffee', 'precio'=>100, 'imagen' => 'https://i1.wp.com/www.elsantogrialalmagro.es/wp-content/uploads/2020/05/cafe-solo-descafeinado.jpg?fit=548%2C428&ssl=1','description' => "Enjoy the taste of one of the best coffees of the moment, which is composed of the number one coffee bean in Colombia",'id_Categoria' => 2]); 
        Product::create(['name'=>'Coffee Bombom', 'precio'=>120, 'imagen' => 'https://okdiario.com/img/recetas/2017/09/27/cafe-bombon-2.jpg','description' => "Enjoy the taste of one of the best coffees of the moment, which is composed of the number one coffee bean in Colombia",'id_Categoria' => 2]); 
        Product::create(['name'=>'Coffee With Milk', 'precio'=>120, 'imagen' => 'https://forbes.es/app/uploads/2017/08/portadaGettyImages-472209108-1280x720.jpg','description' => "Enjoy the taste of one of the best coffees of the moment, which is composed of the number one coffee bean in Colombia",'id_Categoria' => 2]); 
        Product::create(['name'=>'Cafe Americano', 'precio'=>120, 'imagen' => 'https://image.freepik.com/foto-gratis/cafe-leche-servido-vaso-agua_58117-23.jpg','description' => "Enjoy the taste of one of the best coffees of the moment, which is composed of the number one coffee bean in Colombia",'id_Categoria' => 2]); 
        Product::create(['name'=>'Cafe Descafeinado', 'precio'=>120, 'imagen' => 'https://euskovazza.com/wp-content/uploads/2019/03/cafe-descafeinado.jpg','description' => "Enjoy the taste of one of the best coffees of the moment, which is composed of the number one coffee bean in Colombia",'id_Categoria' => 2]); 
        Product::create(['name'=>'Cafe con Agua', 'precio'=>120, 'imagen' => 'https://perfectdailygrind.com/wp-content/uploads/2020/08/Filter-or-Americano-2.jpg','description' => "Enjoy the taste of one of the best coffees of the moment, which is composed of the number one coffee bean in Colombia",'id_Categoria' => 2]); 

        // Juices - Zumos

        Product::create(['name'=>'Orange Juice', 'precio'=>200, 'imagen' => 'https://cope-cdnmed.agilecontent.com/resources/jpg/2/4/1579504829642.jpg','description' => "Enjoy the flavor of one of the juices of the moment, which is composed of tropical fruit, in a natural way",'id_Categoria' => 3]); 
        Product::create(['name'=>'Apple Juice', 'precio'=>200, 'imagen' => 'https://okdiario.com/img/2018/04/26/receta-de-zumo-de-manzana.jpg','description' => "Enjoy the flavor of one of the juices of the moment, which is composed of tropical fruit, in a natural way",'id_Categoria' => 3]); 
        Product::create(['name'=>'Pear Juice', 'precio'=>200, 'imagen' => 'https://img.recetascomidas.com/recetas/640_480/zumo-de-pera.jpg','description' => "Enjoy the flavor of one of the juices of the moment, which is composed of tropical fruit, in a natural way",'id_Categoria' => 3]); 

        Product::create(['name'=>'Grape Juice', 'precio'=>200, 'imagen' => 'https://www.cookforyourlife.org/wp-content/uploads/2018/08/Fresh-Grape-Juice.jpg','description' => "Enjoy the flavor of one of the juices of the moment, which is composed of tropical fruit, in a natural way",'id_Categoria' => 3]); 
        Product::create(['name'=>'Peach Juice', 'precio'=>200, 'imagen' => 'https://i0.wp.com/foodapparel.com/wp-content/uploads/2015/08/peach-juice-1.jpg?fit=900%2C1350&ssl=1','description' => "Enjoy the flavor of one of the juices of the moment, which is composed of tropical fruit, in a natural way",'id_Categoria' => 3]); 
        Product::create(['name'=>'Pineapple Juice', 'precio'=>200, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmtZetAF_x5RTRq5gwoVrbE9SwTXP48YkGrQ&usqp=CAU','description' => "Enjoy the flavor of one of the juices of the moment, which is composed of tropical fruit, in a natural way",'id_Categoria' => 3]); 
      
        // Bolleria

        Product::create(['name'=>'Chocolate Cane', 'precio'=>300, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh3xFy6EcuxLJcIohuLo4M8U_JmbRZqH18QQ&usqp=CAU','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 4]); 
        Product::create(['name'=>'Donuts', 'precio'=>300, 'imagen' => 'https://cdn1.cocina-familiar.com/recetas/thumb/como-hacer-donuts-caseros-y-esponjosos.JPG','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 4]); 
        Product::create(['name'=>'Strudel', 'precio'=>300, 'imagen' => 'https://www.recetips.com/uploads/recetas_b6c6876ef57c88b93b8f08307fff63e7.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 4]); 

        Product::create(['name'=>'Apple Cacke', 'precio'=>200, 'imagen' => 'https://vod-hogarmania.atresmedia.com/hogarmania/images/images01/2014/02/05/5bf2d9f5a649820001d3dd41/1239x697.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 4]); 
        Product::create(['name'=>'CupCacke', 'precio'=>200, 'imagen' => 'https://www.afuegolento.com/img_db/timthumb.php?src=img_db/old/8bc97494233728ef8c91d097f8a5be3f_thumb.jpg&w=800&z=1','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 4]); 
        Product::create(['name'=>'Chocolated Donut', 'precio'=>200, 'imagen' => 'https://www.recetasderechupete.com/wp-content/uploads/2017/06/Donuts-con-glaseado-de-chocolate.jpg?width=1200&enable=upscale','description' => "LTry the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 4]); 

        // Drinks

        Product::create(['name'=>'Water', 'precio'=>100, 'imagen' => 'https://www.lapatilla.com/wp-content/uploads/2015/06/agua-vaso.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 5]); 
        Product::create(['name'=>'Beer', 'precio'=>120, 'imagen' => 'https://health.clevelandclinic.org/wp-content/uploads/sites/3/2015/08/beerAllergy-1165339040-770x553-1.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside", 'id_Categoria' => 5]); 

        Product::create(['name'=>'Sangria', 'precio'=>200, 'imagen' => 'https://www.hola.com/imagenes/cocina/recetas/20200514167988/receta-sangria-clasica/0-823-899/sangria-m.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 5]); 
        Product::create(['name'=>'Whine', 'precio'=>200, 'imagen' => 'https://www.catadelvino.com/uploads/que-significa-la-categoria-de-vino-de-mesa-4917-1.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 5]); 
        Product::create(['name'=>'Desperados', 'precio'=>200, 'imagen' => 'https://s.libertaddigital.com/2021/02/10/1920/1080/fit/desperados-cerveza.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 5]); 
        Product::create(['name'=>'CockTails', 'precio'=>200, 'imagen' => 'https://spoonuniversity.com/wp-content/uploads/sites/34/2016/06/cocktail10.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 5]); 

        // Sandwices
        Product::create(['name'=>'Sandwiches Cheese and York', 'precio'=>220, 'imagen' => 'https://i.blogs.es/e420cc/sandwich-mixto-perfecto/840_560.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside", 'id_Categoria' => 6]); 
        Product::create(['name'=>'Chicken Sandwiches', 'precio'=>250, 'imagen' => 'https://gbprodcdnimages2.azureedge.net/files/styles/recipe_main_image_670x420/windowsazurestorage/recipes/15401123820a932792193b606a4e766ce3a247a59f.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside", 'id_Categoria' => 6]); 
        Product::create(['name'=>'Butter Sandwiches', 'precio'=>200, 'imagen' => 'https://www.shortlist.com/media/imager/201905/18493-posts.article_md.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 6]); 
        Product::create(['name'=>'Jam Sandwich', 'precio'=>200, 'imagen' => 'https://i1.wp.com/blog.gardenuity.com/wp-content/uploads/2019/01/grilled-cheese-with-jelly-gardenuity.com_.jpg?fit=1024%2C768&ssl=1','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 6]); 
        Product::create(['name'=>'Tuna Sandwich', 'precio'=>200, 'imagen' => 'https://unareceta.com/wp-content/uploads/2014/12/sandwich-de-atun.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 6]); 
        Product::create(['name'=>'Sandwich Vegetable', 'precio'=>200, 'imagen' => 'https://los-alamos.es/wp-content/uploads/2020/05/sandwich-vegetal-en-espana.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 6]); 

        // Ensaldas

        Product::create(['name'=>'Normal Salad', 'precio'=>200, 'imagen' => 'https://www.lovemysalad.com/sites/default/files/styles/home_carousel_item_768/public/crujip.jpg?itok=tSkyE3f8','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside", 'id_Categoria' => 7]); 
        Product::create(['name'=>'Cesar Salad', 'precio'=>320, 'imagen' => 'https://www.pcrm.org/sites/default/files/2019-12/Untitled%20%283%29_1.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside", 'id_Categoria' => 7]); 
        Product::create(['name'=>'Chicken Salad', 'precio'=>200, 'imagen' => 'https://dinnerthendessert.com/wp-content/uploads/2019/01/Classic-Chicken-Salad-2-500x375.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 7]); 
        Product::create(['name'=>'Avocado Salad', 'precio'=>200, 'imagen' => 'https://cdn.colombia.com/gastronomia/2011/07/26/ensalada-de-aguacate-y-tomate-1496-0.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 7]); 
        Product::create(['name'=>'Fruits Salad', 'precio'=>200, 'imagen' => 'https://srecetas.es/system/images/1929/full.fruit-salad-1-3.jpg','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 7]); 
        Product::create(['name'=>'Tuna Salad', 'precio'=>200, 'imagen' => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/autumn-vegetable-salad-with-saffron-dressing-ff72d14.jpg?quality=90&resize=504,458','description' => "Try the new La Piramide sweets, baked to the second, taking advantage of each of these. Inclsuive with Milka chocolate inside",'id_Categoria' => 7]); 
    
        // Menus

        Product::create(['name'=>'Menu Deluxe', 'precio'=>500, 'imagen' => 'https://i.imgur.com/K5whf41.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu Special', 'precio'=>400, 'imagen' => 'https://i.imgur.com/5sbdZhX.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu Dorada', 'precio'=>600, 'imagen' => 'https://i.imgur.com/mAwQGKL.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu Jerobel', 'precio'=>450, 'imagen' => 'https://i.imgur.com/VYxrFpG.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu House', 'precio'=>550, 'imagen' => 'https://i.imgur.com/4gbrqbs.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu OutPhone', 'precio'=>300, 'imagen' => 'https://i.imgur.com/h6BdyhZ.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu Logithech', 'precio'=>320, 'imagen' => 'https://i.imgur.com/CdLEECJ.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu Tree', 'precio'=>410, 'imagen' => 'https://i.imgur.com/XJIi0Vc.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]);
        Product::create(['name'=>'Menu Monst', 'precio'=>500, 'imagen' => 'https://i.imgur.com/6rqanYK.jpg','description' => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.", 'id_Categoria' => 8]); 

    }
}
