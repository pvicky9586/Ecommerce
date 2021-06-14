<?php

namespace Database\Factories;

use App\Models\DetailProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'colour' => $this->faker->hexcolor(),
           'amount' => $this->faker->randomDigit(1-10),
           'img' => $this->faker->imageUrl(150, 200),
           'value' => $this->faker->randomFloat(2, 10, 100),
           // 'category_id' => rand(1,9),
           'product_id' => rand(1,30),    
        ];
    }
}
