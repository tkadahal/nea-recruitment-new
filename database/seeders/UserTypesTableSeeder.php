<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        $userTypes = [
            [
                'ID' => 1,
                'TITLE' => 'DCS_USER',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'PROVINCE_USER',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'TITLE' => 'DMD_USER',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        UserType::insert($userTypes);
    }
}
