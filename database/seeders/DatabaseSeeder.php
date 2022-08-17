<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ShoppingItem;
use App\Models\ShoppingItemColorOption;
use App\Models\ShoppingItemSearchTag;
use App\Models\ShoppingItemSizeOption;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         ShoppingItem::factory(15)
             ->has(ShoppingItemSizeOption::factory()->count(3), 'shoppingItemSizeOptions')
             ->has(ShoppingItemSearchTag::factory()->count(3), 'shoppingItemSearchTag')
             ->has(ShoppingItemColorOption::factory()->count(3), 'shoppingItemColorOptions')
             ->create();
    }
}
