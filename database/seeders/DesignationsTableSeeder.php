<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $designations = [
            [
                'id' => 1,
                'gender_id' => 1,
                'title' => 'Officer',
                'minimum_age' => 21,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'gender_id' => 2,
                'title' => 'Officer',
                'minimum_age' => 21,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'gender_id' => 3,
                'title' => 'Officer',
                'minimum_age' => 21,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'gender_id' => 1,
                'title' => 'Assistant',
                'minimum_age' => 18,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'gender_id' => 2,
                'title' => 'Assistant',
                'minimum_age' => 18,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'gender_id' => 3,
                'title' => 'Assistant',
                'minimum_age' => 18,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'gender_id' => 1,
                'title' => 'Executive',
                'minimum_age' => 21,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 8,
                'gender_id' => 2,
                'title' => 'Executive',
                'minimum_age' => 21,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 9,
                'gender_id' => 3,
                'title' => 'Executive',
                'minimum_age' => 21,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        Designation::insert($designations);
    }
}
