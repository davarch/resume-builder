<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Profile>
 */
final class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'bio' => $this->faker->paragraphs(4, true),
            'user_id' => User::factory(),
        ];
    }
}
