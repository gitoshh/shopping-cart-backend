<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ShoppingItem extends Model
{
    use HasFactory;
    protected $table = 'shopping_items';

    protected $guarded = [];


    /**
     * @return HasMany
     */
    public function shoppingItemColorOptions(): HasMany
    {
        return $this->hasMany(ShoppingItemColorOption::class);
    }

    /**
     * @return HasOne
     */
    public function shoppingItemSearchTag(): HasOne
    {
        return $this->hasOne(ShoppingItemSearchTag::class);
    }

    /**
     * @return HasMany
     */
    public function shoppingItemSizeOptions(): HasMany
    {
        return $this->hasMany(ShoppingItemSizeOption::class);
    }
}
