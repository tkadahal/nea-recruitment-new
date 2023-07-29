<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ApplicationFee;
use Illuminate\Database\Seeder;

class ApplicationFeesTableSeeder extends Seeder
{
    public function run(): void
    {
        $applicationFees = [
            [

                'title' => 'Officer 10',
                'open' => 2000,
                'female' => 500,
                'janajati' => 500,
                'madhesi' => 500,
                'dalit' => 500,
                'disabled' => 500,
                'rural' => 500,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Officer 9',
                'open' => 1600,
                'female' => 500,
                'janajati' => 500,
                'madhesi' => 500,
                'dalit' => 500,
                'disabled' => 500,
                'rural' => 500,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Officer 8',
                'open' => 1400,
                'female' => 500,
                'janajati' => 500,
                'madhesi' => 500,
                'dalit' => 500,
                'disabled' => 500,
                'rural' => 500,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Officer 7',
                'open' => 1200,
                'female' => 400,
                'janajati' => 400,
                'madhesi' => 400,
                'dalit' => 400,
                'disabled' => 400,
                'rural' => 400,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Assistant 5',
                'open' => 800,
                'female' => 300,
                'janajati' => 300,
                'madhesi' => 300,
                'dalit' => 300,
                'disabled' => 300,
                'rural' => 300,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Assistant 4',
                'open' => 700,
                'female' => 200,
                'janajati' => 200,
                'madhesi' => 200,
                'dalit' => 200,
                'disabled' => 200,
                'rural' => 200,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'title' => 'Assistant 3',
                'open' => 600,
                'female' => 200,
                'janajati' => 200,
                'madhesi' => 200,
                'dalit' => 200,
                'disabled' => 200,
                'rural' => 200,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        ApplicationFee::insert($applicationFees);
    }
}
