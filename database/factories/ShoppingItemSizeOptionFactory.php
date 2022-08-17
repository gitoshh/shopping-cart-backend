<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\ShoppingItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ShoppingItemSizeOptionFactory extends Factory
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
            'tags'             => fake()->randomElements(['male', 'female', 'unisex', 'cars', 'accessories', 'phones', 'laptops', 'books']),
            'shopping_item_id' => ShoppingItem::factory()
        ];
    }
}
