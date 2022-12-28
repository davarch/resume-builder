<?php

declare(strict_types=1);

namespace Infrastructure\Profile\Queries;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

interface UserProfileQueryContract
{
    /**
     * @param  Authenticatable  $user
     * @return Model
     */
    public function handle(Authenticatable $user): Model;
}
