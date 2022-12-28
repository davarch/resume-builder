<?php

declare(strict_types=1);

namespace Domains\Profile\Actions;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Profile\Actions\UpdateProfileBioContract;

final class UpdateProfileBio implements UpdateProfileBioContract
{
    public function handle(Model $profile, string $bio): void
    {
        $profile->update(
            attributes: ['bio' => $bio]
        );
    }
}
