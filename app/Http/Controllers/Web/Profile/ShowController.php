<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Profile;

use Illuminate\Http\Request;
use Illuminate\View\View;

final class ShowController
{
    /**
     * @param  Request  $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('profile');
    }
}
