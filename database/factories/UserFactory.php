<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $faker = $this->faker;

        $mobileNumber = $faker->unique()->phoneNumber;
        while (!preg_match('/^[0-9]{10}$/', $mobileNumber)) {
            $mobileNumber = $faker->unique()->phoneNumber;
        }

        return [
            'gender_id' => $faker->randomElement([1, 2, 3]),
            'applicant_id' => $faker->unique()->randomNumber(),
            'sanket_num' => $faker->optional()->numerify('S#####'),
            'name' => $faker->name,
            'name_np' => $faker->optional()->firstName,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Default password for all users (change as required)
            'mobile_number' => $mobileNumber,
            'dob_np' => $faker->optional()->date('l, j F Y'),
            'dob_en' => $faker->optional()->date(),
            'citizenship_number' => $faker->optional()->numerify('######'),
            'citizenship_district_id' => null,
            'citizenship_issued_date' => $faker->optional()->date(),
            'is_handicapped' => $faker->boolean(20), // 20% chance of being handicapped
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }
}
