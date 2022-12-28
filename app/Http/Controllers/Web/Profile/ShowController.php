<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Profile;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Infrastructure\Profile\Queries\UserProfileQueryContract;

final class ShowController
{
    /**
     * @param  Request  $request
     * @param  \App\Models\User  $user
     * @param  UserProfileQueryContract  $query
     * @return View
     */
    public function __invoke(
        Request $request,
        Authenticatable $user,
        UserProfileQueryContract $query
    ): View {
        return view(
            view: 'profile.show',
            data: [
                'profile' => $query->handle(
                    user: $user
                ),
            ]
        );
    }
}
