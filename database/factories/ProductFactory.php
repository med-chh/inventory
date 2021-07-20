<?php

namespace Database\Factories;

use App\Product;
use App\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name,
            'quantity' => $this->faker->numberBetween(0,100),
            'buy_price' => $this->faker->randomFloat(2,10,1000),
            'sale_price' => $this->faker->randomFloat(2,10,10000),
            'category_id' => Category::all()->random()->id,
            'media_id' => $this->faker->randomDigitNotNull
        ];
    }
}
