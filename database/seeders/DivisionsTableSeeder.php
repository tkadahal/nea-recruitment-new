<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $divisions = [
            [
                'id' => 1,
                'title' => 'Distinction',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'First Division',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Second Division',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Pass',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        Division::insert($divisions);
    }
}
