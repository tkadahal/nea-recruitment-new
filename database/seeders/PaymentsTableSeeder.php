<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentsTableSeeder extends Seeder
{
    public function run(): void
    {
        $numberOfPayments = 20;

        Payment::factory()->count($numberOfPayments)->create();
    }
}
