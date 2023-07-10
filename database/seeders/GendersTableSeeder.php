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
                'ID' => 1,
                'TITLE' => 'Male',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'Female',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'TITLE' => 'Others',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        Gender::insert($genders);
    }
}
