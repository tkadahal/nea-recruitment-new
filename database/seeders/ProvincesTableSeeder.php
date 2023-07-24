<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    public function run(): void
    {
        $provinces = [
            [
                'id' => 1,
                'title' => 'Koshi Province',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Madhesh Province',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Bagmati Province',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Gandaki Province',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'Lumbini Province',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'title' => 'Karnali Province',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'title' => 'Sudurpaschim Province',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        Province::insert($provinces);
    }
}
