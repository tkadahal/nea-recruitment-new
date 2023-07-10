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
                'ID' => 1,
                'GENDER_ID' => 1,
                'TITLE' => 'Officer',
                'MINIMUM_AGE' => 21,
                'MAXIMUM_AGE' => 35,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'GENDER_ID' => 2,
                'TITLE' => 'Officer',
                'MINIMUM_AGE' => 21,
                'MAXIMUM_AGE' => 40,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'GENDER_ID' => 3,
                'TITLE' => 'Officer',
                'MINIMUM_AGE' => 21,
                'MAXIMUM_AGE' => 35,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 4,
                'GENDER_ID' => 1,
                'TITLE' => 'Assistant',
                'MINIMUM_AGE' => 18,
                'MAXIMUM_AGE' => 35,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 5,
                'GENDER_ID' => 2,
                'TITLE' => 'Assistant',
                'MINIMUM_AGE' => 18,
                'MAXIMUM_AGE' => 40,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 6,
                'GENDER_ID' => 3,
                'TITLE' => 'Assistant',
                'MINIMUM_AGE' => 18,
                'MAXIMUM_AGE' => 35,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 7,
                'GENDER_ID' => 1,
                'TITLE' => 'Executive',
                'MINIMUM_AGE' => 21,
                'MAXIMUM_AGE' => 40,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 8,
                'GENDER_ID' => 2,
                'TITLE' => 'Executive',
                'MINIMUM_AGE' => 21,
                'MAXIMUM_AGE' => 40,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 9,
                'GENDER_ID' => 3,
                'TITLE' => 'Executive',
                'MINIMUM_AGE' => 21,
                'MAXIMUM_AGE' => 40,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        Designation::insert($designations);
    }
}
