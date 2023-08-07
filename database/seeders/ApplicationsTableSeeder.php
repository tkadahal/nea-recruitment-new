<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use App\Models\Application;
use Illuminate\Support\Str;
use App\Models\Advertisement;
use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();
        $advertisementIds = Advertisement::pluck('id')->toArray();

        foreach ($userIds as $userId) {
            foreach ($advertisementIds as $advertisementId) {
                Application::create([
                    'uuid' => Str::uuid(),
                    'user_id' => $userId,
                    'advertisement_id' => $advertisementId,
                    'payable_amount' => '10',
                ]);
            }
        }
    }
}
