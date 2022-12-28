<?php

declare(strict_types=1);

namespace App\Http\Controllers\Public\Profile;

use App\Http\Controllers\Controller;
use App\Models\Share;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class ShowController extends Controller
{
    public function __invoke(Request $request, Share $share): View
    {
        return view("pages.shares.$share->template", [
            'share' => $share->load([
                'profile.owner', 'profile.experiences.jobTitle', 'profile.experiences.company',
            ]),
        ]);
    }
}
