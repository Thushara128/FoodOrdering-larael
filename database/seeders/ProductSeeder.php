<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [ 'dish_name'=>'Veg Bririyani',
              'available'=>'5',
              "price"=>"70",
              "description"=>"Vegitable biriyani with Curry",
              "gallery"=>"https://th.bing.com/th/id/R8b274a9308aa4a22afb532ee859bf071?rik=T7uoSrPmWjn9Mw&riu=http%3a%2f%2fvegecravings.com%2fwp-content%2fuploads%2f2016%2f07%2fveg-biryani-recipe-step-by-step-instructions.jpg&ehk=OjLyESqrMWSBnpYW9m0dCjT1h9kVqUKNqz4dS%2fTHOmk%3d&risl=&pid=ImgRaw"
        ],
        [ 'dish_name'=>'Chicken Bririyani',
              'available'=>'15',
              "price"=>"100",
              "description"=>"Chicken biriyani with Salad",
              "gallery"=>"https://norecipes.com/wp-content/uploads/2017/05/chicken-biryani-12-1290x1934.jpg"
    ],
    [ 'dish_name'=>'Meals',
              'available'=>'5',
              "price"=>"70",
              "description"=>"Homely Meals",
              "gallery"=>"https://th.bing.com/th/id/OIP.sFDjFKdmvsjcf8S2tKS_EwHaEA?pid=Api&rs=1"
],

[ 'dish_name'=>'Special Meals',
              'available'=>'15',
              "price"=>"100",
              "description"=>"Homely Meals with Speals",
              "gallery"=>"https://th.bing.com/th/id/OIP.ync2PlPCRjA5GNiMNOPZUgHaE8?pid=Api&rs=1"
],
[ 'dish_name'=>'Tea',
              'available'=>'100',
              "price"=>"10",
              "description"=>"Different types of meals",
              "gallery"=>"https://th.bing.com/th/id/OIP.ZLxQkOQoTbOMNKLeHi-DjwHaEK?pid=Api&rs=1"
]
          ]);
      
    }
}
