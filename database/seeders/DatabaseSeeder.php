<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
    		'users', 
            'detail_products', 'prices','colours','images',
            'products',   
            'categories',
            
    	]);
        //llamando directamente al fatory  
         \App\Models\User::factory(10)->create();   

    
         //Ejec factory atraves de seeder
        // $this->call(SeederCategorys::class); 
        // $this->call(SeederProducts::class); 
        $this->call([
            SeederCategorys::class,
            SeederProducts::class, //ejecuta factory product-Detail-Prices
        ]);
            \App\Models\DetailProduct::factory()->count(30)->create(); 
            \App\Models\Image::factory(50)->create();
            \App\Models\Colour::factory()->count(90)->create(); 


    }



    protected function truncateTables(array $tables)
    {
    	
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	
    	foreach ($tables as $table){
    		DB::table($table)->truncate();	
    	}
    	
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
