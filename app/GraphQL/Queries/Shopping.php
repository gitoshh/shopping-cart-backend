<?php

namespace App\GraphQL\Queries;

final class Shopping
{
    /**
     * @param null $_
     * @param array{} $args
     * @return string
     */
    public function __invoke($_, array $args): string
    {
        return 'testing';
    }
}
