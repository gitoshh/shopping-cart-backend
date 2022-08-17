<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\ShoppingItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ShoppingItemColorOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid'             => fake()->uuid(),
            'color'            => fake()->colorName(),
            'price'            => fake()->randomFloat(2, 10, 1000),
            'image'            => fake()->imageUrl(),
            'item_count'       => 1,
            'shopping_item_id' => ShoppingItem::factory(),
        ];
    }
}
