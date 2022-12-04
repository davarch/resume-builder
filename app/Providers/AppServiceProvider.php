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
        Model::shouldBeStrict();

        if (app()->isProduction()) {
            Model::handleLazyLoadingViolationUsing(static function ($model, $relation) {
                $class = get_class($model);

                info("Attempted to lazy load [$relation] on model [$class].");
            });
        }

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
