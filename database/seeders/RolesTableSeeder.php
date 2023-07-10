<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'ID' => 1,
                'TITLE' => 'Super_Admin',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'Admin',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        Role::insert($roles);
    }
}
