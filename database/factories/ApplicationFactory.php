<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\User;
use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ApplicationFactory extends Factory
{
    protected $model = Application::class;

    // Static variable to keep track of users who have applied to each advertisement
    protected static $usersByAdvertisement = [];

    public function definition()
    {
        // Get all users and advertisements
        $users = User::all();
        $advertisements = Advertisement::all();

        // Get the current advertisement and remove it from the collection
        $advertisement = $advertisements->random();
        $advertisements = $advertisements->except($advertisement->id);

        // Get the users who have not applied for this advertisement yet
        $availableUsers = $users->reject(function ($user) use ($advertisement) {
            return in_array($user->id, static::$usersByAdvertisement[$advertisement->id] ?? []);
        });

        // If all users have applied for this advertisement, reset the list for the next run
        if ($availableUsers->isEmpty()) {
            static::$usersByAdvertisement[$advertisement->id] = [];
            $availableUsers = $users;
        }

        // Select a user who hasn't applied yet for this advertisement
        $user = $availableUsers->random();

        // Update the list to mark the selected user as applied for this advertisement
        static::$usersByAdvertisement[$advertisement->id][] = $user->id;

        return [
            'uuid' => $this->faker->uuid,
            'user_id' => $user->id,
            'advertisement_id' => $advertisement->id,
            'payable_amount' => $this->faker->randomNumber(4), // Replace this with appropriate logic for payable_amount
            'active' => $this->faker->boolean(50), // 50% chance of being active
        ];
    }
}
