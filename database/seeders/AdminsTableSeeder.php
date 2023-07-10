<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    public function run(): void
    {
        $admins = [
            [
                'id' => 1,
                'name' => 'IT Department',
                'email' => 'itd@nea.org.np',
                'email_verified_at' => null,
                'password' => bcrypt('nea@dmin!@#'),
                'mobile_number' => '9841423969',
                'last_login_at' => null,
                'last_login_ip' => null,
                'remember_token' => null,
                'exam_center_id' => null,
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
        ];

        Admin::insert($admins);
    }
}
