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
                
                'title' => 'स्थायी',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'अस्थायी',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'करार',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'आंशिक',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        RecruitmentType::insert($recruitmentTypes);
    }
}
