<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Profile;
use App\Models\Share;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Share>
 */
final class ShareFactory extends Factory
{
    public function definition(): array
    {
        return [
            'token' => str()->random(20),
            'email' => $this->faker->safeEmail(),
            'template' => 'example',
            'profile_id' => Profile::factory(),
        ];
    }
}
