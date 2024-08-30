<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
            'price' => fake()->randomNumber(5, false),
            'type' => fake()->randomElement(['trousers','t-shirt','sweatshirt','shirt']),
            'size' => fake()->randomElement(['s','m','l','xl']),
            'color' => fake()->randomElement(['green','white','black','red'])
        ];
    }
}
