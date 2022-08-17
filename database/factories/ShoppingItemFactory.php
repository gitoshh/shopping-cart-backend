<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ShoppingItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid'        => fake()->uuid(),
            'name'        => fake()->sentence(3, true),
            'description' => fake()->sentences(4, true),
            'price'       => fake()->randomFloat(2, 5, 1000),
            'item_count'  => fake()->randomNumber(2),
            'image'       => fake()->imageUrl(),
        ];
    }
}
