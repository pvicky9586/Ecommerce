<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name' =>$this->faker->text(20),
            'price' => $this->faker->randomFloat(2, 10, 100),
           'image_path' => $this->faker->imageUrl(150, 200, 'cats', true, 'Faker'),
           'category_id'=> rand(1,9),
        ];
    }
}
