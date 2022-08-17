<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoppingItemSearchTag extends Model
{
    use HasFactory;
    protected $table = 'shopping_item_search_tags';

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function shoppingItem(): BelongsTo
    {
        return $this->belongsTo(ShoppingItem::class);
    }
}
