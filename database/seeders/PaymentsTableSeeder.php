<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Application;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    public function run(): void
    {
        $applications = Application::all();

        foreach ($applications as $application) {
            Payment::create([
                'application_id' => $application->id,
                'reference_id' => 'REF_' . $application->uuid, // You can generate a unique reference here
                'amount' => $application->payable_amount,
                'payment_status' => '1',
                'payment_gateway' => 'esewa', // Replace with your desired payment gateway
            ]);
        }
    }
}
