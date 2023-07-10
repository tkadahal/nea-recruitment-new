<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\SamabeshiGroup;
use Illuminate\Database\Seeder;

class SamabeshiGroupsTableSeeder extends Seeder
{
    public function run(): void
    {
        $samabeshiGroups = [
            [
                'ID' => 1,
                'TITLE' => 'खुल्ला',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'महिला',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'TITLE' => 'आदिवाशी / जनजाती',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 4,
                'TITLE' => 'मधेशी',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 5,
                'TITLE' => 'दलित',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 6,
                'TITLE' => 'अपाङ्ग',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 7,
                'TITLE' => 'पिक्षडिएको क्षेत्र',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        SamabeshiGroup::insert($samabeshiGroups);
    }
}
