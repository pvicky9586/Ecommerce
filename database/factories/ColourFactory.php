<?php

namespace Database\Factories;

use App\Models\Colour;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Colour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

       // $array = ['colour' => 'Rojo', 'cod' => '#dc1a0a'];

      
        return [
            
            // 'colour' => $this->faker->name(6),
            'cod' => $this->faker->hexcolor(),
            'num' => $this->faker->randomDigit(1-20),
            'product_id' => rand(1,9), 
        ];
    }
}
