<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\SubGroup;
use Illuminate\Database\Seeder;

class SubGroupsTableSeeder extends Seeder
{
    public function run(): void
    {
        $subGroups = [
            [
                'id' => 1,
                'group_id' => 1,
                'title' => 'Electrical',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'group_id' => 1,
                'title' => 'Electronics',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'group_id' => 1,
                'title' => 'Electronics',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'group_id' => 2,
                'title' => 'Civil',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'group_id' => 2,
                'title' => 'Survey',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'group_id' => 3,
                'title' => 'Administration',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'group_id' => 3,
                'title' => 'Law',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 8,
                'group_id' => 4,
                'title' => '-',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 9,
                'group_id' => 4,
                'title' => 'Charted Accountancy',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 10,
                'group_id' => 5,
                'title' => '-',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 11,
                'group_id' => 1,
                'title' => 'Electrical',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 12,
                'group_id' => 6,
                'title' => 'Statistics',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 13,
                'group_id' => 6,
                'title' => 'Sociology',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 14,
                'group_id' => 6,
                'title' => 'Economics',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 15,
                'group_id' => 6,
                'title' => 'Computer Engineering',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 16,
                'group_id' => 6,
                'title' => 'Geology',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 17,
                'group_id' => 6,
                'title' => 'Environment',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        SubGroup::insert($subGroups);
    }
}
