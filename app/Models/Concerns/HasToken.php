<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Model;

trait HasToken
{
    /**
     * @return void
     */
    public static function bootHasToken(): void
    {
        static::creating(static fn (Model $model) => $model->token = str()->random(20));
    }
}
