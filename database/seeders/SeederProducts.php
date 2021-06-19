<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

use Illuminate\Support\Str;


class SeederProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\Product::factory()->count(30)->create(); 

       

    	//\App\Models\Price::factory()->count(30)->create(); 

    

    }
}
