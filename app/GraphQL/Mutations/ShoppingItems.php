<?php

namespace App\GraphQL\Mutations;

use App\Models\ShoppingItem;
use Illuminate\Database\Eloquent\Collection;

final class ShoppingItems
{
    /**
     * @param null $_
     * @param array{} $args
     * @return Collection
     */
    public function __invoke($_, array $args): Collection
    {}
}
