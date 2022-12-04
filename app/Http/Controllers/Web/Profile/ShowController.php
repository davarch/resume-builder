<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Profile;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ShowController
{
    /**
     * @param  Request  $request
     * @param  \App\Models\User  $user
     * @return View
     */
    public function __invoke(Request $request, Authenticatable $user): View
    {
        return view('profile.show', [
            'user' => $user->load(['profile']),
        ]);
    }
}
