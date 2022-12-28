<?php

declare(strict_types=1);

namespace Domains\Profile\Queries;

use App\Models\Profile;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Infrastructure\Profile\Queries\UserProfileQueryContract;

final class UserProfileQuery implements UserProfileQueryContract
{
    /**
     * @param  \App\Models\User  $user
     * @return Model
     */
    public function handle(Authenticatable $user): Model
    {
        return Profile::query()->whereBelongsTo($user, 'owner')->first();
    }
}
