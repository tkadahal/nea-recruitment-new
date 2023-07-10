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
                'ID' => 1,
                'GROUP_ID' => 1,
                'TITLE' => 'Electrical',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'GROUP_ID' => 1,
                'TITLE' => 'Electronics',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'GROUP_ID' => 1,
                'TITLE' => 'Electronics',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 4,
                'GROUP_ID' => 2,
                'TITLE' => 'Civil',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 5,
                'GROUP_ID' => 2,
                'TITLE' => 'Survey',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 6,
                'GROUP_ID' => 3,
                'TITLE' => 'Administration',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 7,
                'GROUP_ID' => 3,
                'TITLE' => 'Law',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 8,
                'GROUP_ID' => 4,
                'TITLE' => '-',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 9,
                'GROUP_ID' => 4,
                'TITLE' => 'Charted Accountancy',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 10,
                'GROUP_ID' => 5,
                'TITLE' => '-',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 11,
                'GROUP_ID' => 1,
                'TITLE' => 'Electrical',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 12,
                'GROUP_ID' => 6,
                'TITLE' => 'Statistics',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 13,
                'GROUP_ID' => 6,
                'TITLE' => 'Sociology',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 14,
                'GROUP_ID' => 6,
                'TITLE' => 'Economics',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 15,
                'GROUP_ID' => 6,
                'TITLE' => 'Computer Engineering',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 16,
                'GROUP_ID' => 6,
                'TITLE' => 'Geology',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 17,
                'GROUP_ID' => 6,
                'TITLE' => 'Environment',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        SubGroup::insert($subGroups);
    }
}
