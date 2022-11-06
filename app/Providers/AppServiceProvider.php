<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Model::shouldBeStrict(! app()->isProduction());

        Password::defaults(static function () {
            return Password::min(12)
                ->uncompromised()
                ->mixedCase()
                ->symbols()
                ->numbers()
                ->letters();
        });
    }
}
