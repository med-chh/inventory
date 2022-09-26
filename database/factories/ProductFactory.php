<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\ModelType;

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
            'model_type_id' => ModelType::all()->random()->id
        ];
    }
}
