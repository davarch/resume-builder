<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Profile\Experiences;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Infrastructure\Profile\Queries\UserProfileQueryContract;

final class ShowController extends Controller
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
        return view('profile.experiences.show', [
            'profile' => $query->handle(
                user: $user
            )->load(['experiences.jobTitle', 'experiences.company']),
        ]);
    }
}
