<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            [
                'id' => 1,
                'title' => 'Pending',
                'color' => '#441ce6',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Send For Approval',
                'color' => '#1a9ee8',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Send For Modification',
                'color' => '#f0b00c',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Approve',
                'color' => '#1ce63c',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'Reject',
                'color' => '#f70522',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        Status::insert($statuses);
    }
}
