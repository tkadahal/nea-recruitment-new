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
                
                'title' => 'खुल्ला',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'महिला',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'आदिवाशी / जनजाती',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'मधेशी',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'दलित',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'अपाङ्ग',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                
                'title' => 'पिक्षडिएको क्षेत्र',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        SamabeshiGroup::insert($samabeshiGroups);
    }
}
