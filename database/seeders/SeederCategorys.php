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
        //$faker = Faker\Factory::create('es_ES');
 	   //DB::table('categories')->truncate();
        \App\Models\Category::factory()->count(9)->create();
     

        
    	

     //    DB::table('categories')->insert(
     //    	['name' => 'Clothing'],
     //   	);
     //   	DB::table('categories')->insert(
     //   		['name' => 'Footwear'],
     //   	);
     //   	DB::table('categories')->insert(
     //   		['name' => 'Beauty'],
     //   	);
     //   	DB::table('categories')->insert(
     //   		['name' => 'Cars'],
     //   	);
     //   	DB::table('categories')->insert(
     //   		['name' => 'Home appliances'],
     //   	);
     //   	DB::table('categories')->insert(
     //   		['name' => 'Animals'],
     //   	);
     //   	DB::table('categories')->insert(
     //   		['name' => 'Sports'],
     //   	);  
     //    DB::table('categories')->insert(
     //      ['name' => 'Technology'],
     //    );   
   		// DB::table('categories')->insert(
     //   		['name' => 'Specify'],
     //   	);
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

