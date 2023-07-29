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

                'title' => 'Pending',
                'color' => '#441ce6',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Send For Approval',
                'color' => '#1a9ee8',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Send For Modification',
                'color' => '#f0b00c',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Approve',
                'color' => '#1ce63c',
                'active' => 1,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

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
