<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Experience;
use App\Models\JobTitle;
use App\Models\Share;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Experience::factory(10)->create([
            'profile_id' => $user->profile->id,
        ]);

        JobTitle::factory(20)->create();
        Company::factory(10)->create();

        Share::factory(5)->create([
            'profile_id' => $user->profile->id
        ]);
    }
}
