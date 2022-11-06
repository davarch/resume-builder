<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Str;

/**
 * @method static creating(Closure $param)
 */
trait HasUuid
{
    /**
     * @return void
     */
    public static function bootHasUuid(): void
    {
        static::creating(static fn (Model $model) => $model->uuid = Str::uuid()->toString());
    }
}
