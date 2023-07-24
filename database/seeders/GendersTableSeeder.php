<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    public function run(): void
    {
        $genders = [
            [
                'id' => 1,
                'title' => 'Male',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Female',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Others',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        Gender::insert($genders);
    }
}
