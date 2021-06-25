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
             'image_cat' => 'clothing.jpeg'],
       	);
       	DB::table('categories')->insert(
       		['name' => 'Footwear', 
             'image_cat' => 'footwear.jpg'],
       	);
       	DB::table('categories')->insert(
       		['name' => 'Beauty',
             'image_cat' => 'beauty.jpg'],
       	);
       	DB::table('categories')->insert(
       		['name' => 'Cars',
            'image_cat' => 'cars.jpg'],
       	);
        DB::table('categories')->insert(
            ['name' => 'Health',
            'image_cat' => 'health.jpg'],
        );
      	DB::table('categories')->insert(
      		['name' => 'Technological Equipments',
             'image_cat' => 'technological equipments.jpg'],
      	);
      	DB::table('categories')->insert(
      		['name' => 'Mobile Technology',
            'image_cat' => 'Mobile technology.jpg'],
      	);
       	DB::table('categories')->insert(
       		['name' => 'Sports',
            'image_cat' => 'sports.jpg'],
       	);  
        DB::table('categories')->insert(
          ['name' => 'Fashion',
           'image_cat' => 'fashion.jpg'],
        );   
   	    DB::table('categories')->insert(
       		['name' => 'Specify'],
       	);
    }

    
}








// ropa clothing
// calzado footwear
// belleza beauty
// autos cars
// Electrodomesticos Home appliances
// animales
// deportes
// tecnologia
// especifique

