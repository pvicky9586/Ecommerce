<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class SeederCategorys extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 	   //DB::table('categories')->truncate();
       // \App\Models\Category::factory()->count(9)->create();
     

        
    	

        DB::table('categories')->insert(
        	['name' => 'Clothing',
             'img' => 'clothing.jpeg'],
       	);
       	DB::table('categories')->insert(
       		['name' => 'Footwear', 
             'img' => 'footwear.jpg'],
       	);
       	DB::table('categories')->insert(
       		['name' => 'Beauty',
             'img' => 'beauty.jpg'],
       	);
       	DB::table('categories')->insert(
       		['name' => 'Cars',
            'img' => 'cars.jpg'],
       	);
        DB::table('categories')->insert(
            ['name' => 'Health',
            'img' => 'health.jpg'],
        );
      	DB::table('categories')->insert(
      		['name' => 'Technological Equipments',
             'img' => 'technological equipments.jpg'],
      	);
      	DB::table('categories')->insert(
      		['name' => 'Mobile Technology',
            'img' => 'Mobile technology.jpg'],
      	);
       	DB::table('categories')->insert(
       		['name' => 'Sports',
            'img' => 'sports.jpg'],
       	);  
        DB::table('categories')->insert(
          ['name' => 'Fashion',
           'img' => 'fashion.jpg'],
        );

    }
}


// 1 ropa clothing
// 2 calzado footwear
// 3 belleza beauty
// 4 autos cars
// 5 Electrodomesticos Home appliances
// 6 animales
// 7 deportes
// 8 tecnologia