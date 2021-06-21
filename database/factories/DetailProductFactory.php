<?php

namespace Database\Factories;

use App\Models\DetailProduct;
//use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
          


       // $randomed1 = Arr::random($array1);


        //$unique=$collection->unique();
        return [
          'description' => $this->faker->text(),
           //'colour' => $this->faker->hexcolor(), //colourunico
           'amount' => $this->faker->randomDigit(1-10),
           // 'img' => $this->faker->imageUrl(150, 200, 'cats', true, 'Faker'),
           'price' => $this->faker->randomFloat(2, 10, 100),
           // 'category_id' => rand(1,9),
           'product_id' => rand(1,9),   
        ];
    }
}
