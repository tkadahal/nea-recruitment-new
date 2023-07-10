<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\RecruitmentType;
use Illuminate\Database\Seeder;

class RecruitmentTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        $recruitmentTypes = [
            [
                'ID' => 1,
                'TITLE' => 'स्थायी',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'अस्थायी',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'TITLE' => 'करार',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 4,
                'TITLE' => 'आंशिक',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        RecruitmentType::insert($recruitmentTypes);
    }
}
