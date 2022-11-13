<?php

declare(strict_types=1);

use App\Models\Profile;

it('allows the user to update their bio on their profile', function (string $string) {
    $profile = Profile::factory()->create();

    expect(
        $profile->bio
    )->toBeString();

    auth()->loginUsingId($profile->owner->id);

    // with $profile->owner
    // update bio from $string
    // expect($profile->refresh())->bio->toEqual($string);
})->with('strings')->group('profile');
