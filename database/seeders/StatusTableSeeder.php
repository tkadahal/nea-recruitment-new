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
                'ID' => 1,
                'TITLE' => 'Pending',
                'COLOR' => '#441ce6',
                'ACTIVE' => 1,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'Send For Approval',
                'COLOR' => '#1a9ee8',
                'ACTIVE' => 1,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'TITLE' => 'Send For Modification',
                'COLOR' => '#f0b00c',
                'ACTIVE' => 1,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 4,
                'TITLE' => 'Approve',
                'COLOR' => '#1ce63c',
                'ACTIVE' => 1,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 5,
                'TITLE' => 'Reject',
                'COLOR' => '#f70522',
                'ACTIVE' => 1,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        Status::insert($statuses);
    }
}
