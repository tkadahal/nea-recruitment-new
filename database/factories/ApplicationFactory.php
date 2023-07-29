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

    public function definition()
    {
        // Get all users and advertisements
        $users = User::all();
        $advertisements = Advertisement::all();

        return [
            'uuid' => $this->faker->uuid,
            'user_id' => $users->random()->id,
            'advertisement_id' => $advertisements->random()->id,
            'payable_amount' => $this->faker->randomNumber(4), // Replace this with appropriate logic for payable_amount
            'active' => $this->faker->boolean(50), // 50% chance of being active
        ];
    }
}
