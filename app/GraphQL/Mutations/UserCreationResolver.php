<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Str;

final class UserCreationResolver
{
    /**
     * @param null $_
     * @param array{} $args
     * @return mixed
     */
    public function __invoke($_, array $args): mixed
    {
        $payload = $args;
        if (isset( $payload['password'])){
            $payload['password'] = bcrypt($payload['password']);
        }

        return User::create($args);
    }
}
