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

                'gender_id' => 1,
                'title' => 'Officer',
                'minimum_age' => 21,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'gender_id' => 2,
                'title' => 'Officer',
                'minimum_age' => 21,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'gender_id' => 3,
                'title' => 'Officer',
                'minimum_age' => 21,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'gender_id' => 1,
                'title' => 'Assistant',
                'minimum_age' => 18,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'gender_id' => 2,
                'title' => 'Assistant',
                'minimum_age' => 18,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'gender_id' => 3,
                'title' => 'Assistant',
                'minimum_age' => 18,
                'maximum_age' => 35,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'gender_id' => 1,
                'title' => 'Executive',
                'minimum_age' => 21,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'gender_id' => 2,
                'title' => 'Executive',
                'minimum_age' => 21,
                'maximum_age' => 40,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

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
