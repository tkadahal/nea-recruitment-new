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
                'id' => 1,
                'title' => 'खुल्ला',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'महिला',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'आदिवाशी / जनजाती',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'मधेशी',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'दलित',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'title' => 'अपाङ्ग',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'title' => 'पिक्षडिएको क्षेत्र',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        SamabeshiGroup::insert($samabeshiGroups);
    }
}
