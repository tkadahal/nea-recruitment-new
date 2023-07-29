<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        // Get all application IDs
        $applicationIds = Application::pluck('id');

        return [
            'application_id' => $this->faker->randomElement($applicationIds),
            'reference_id' => $this->faker->unique()->uuid,
            'pidx' => $this->faker->optional()->numerify('PIDX#####'),
            'transaction_id' => $this->faker->optional()->uuid,
            'amount' => $this->faker->randomFloat(2, 100, 1000), // Change the range as per your requirement
            'paid_amount' => $this->faker->optional()->randomFloat(2, 100, 1000),
            'payment_status' => $this->faker->randomElement(['0', '1', '2', '3']),
            'payment_gateway' => $this->faker->randomElement(['esewa', 'connectips', 'imepay', 'khalti']),
        ];
    }
}
