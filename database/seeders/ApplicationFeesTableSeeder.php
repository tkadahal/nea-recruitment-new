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
                'ID' => 1,
                'TITLE' => 'Officer 10',
                'OPEN' => 2000,
                'FEMALE' => 500,
                'JANAJATI' => 500,
                'MADHESI' => 500,
                'DALIT' => 500,
                'DISABLED' => 500,
                'RURAL' => 500,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'Officer 9',
                'OPEN' => 1600,
                'FEMALE' => 500,
                'JANAJATI' => 500,
                'MADHESI' => 500,
                'DALIT' => 500,
                'DISABLED' => 500,
                'RURAL' => 500,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'TITLE' => 'Officer 8',
                'OPEN' => 1400,
                'FEMALE' => 500,
                'JANAJATI' => 500,
                'MADHESI' => 500,
                'DALIT' => 500,
                'DISABLED' => 500,
                'RURAL' => 500,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 4,
                'TITLE' => 'Officer 7',
                'OPEN' => 1200,
                'FEMALE' => 400,
                'JANAJATI' => 400,
                'MADHESI' => 400,
                'DALIT' => 400,
                'DISABLED' => 400,
                'RURAL' => 400,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 5,
                'TITLE' => 'Assistant 5',
                'OPEN' => 800,
                'FEMALE' => 300,
                'JANAJATI' => 300,
                'MADHESI' => 300,
                'DALIT' => 300,
                'DISABLED' => 300,
                'RURAL' => 300,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 6,
                'TITLE' => 'Assistant 4',
                'OPEN' => 700,
                'FEMALE' => 200,
                'JANAJATI' => 200,
                'MADHESI' => 200,
                'DALIT' => 200,
                'DISABLED' => 200,
                'RURAL' => 200,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 7,
                'TITLE' => 'Assistant 3',
                'OPEN' => 600,
                'FEMALE' => 200,
                'JANAJATI' => 200,
                'MADHESI' => 200,
                'DALIT' => 200,
                'DISABLED' => 200,
                'RURAL' => 200,
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        ApplicationFee::insert($applicationFees);
    }
}
