<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $numberOfApplications = 15; // Change this based on your requirement

        // Use the Application factory to create fake applications
        Application::factory()->count($numberOfApplications)->create();
    }
}
