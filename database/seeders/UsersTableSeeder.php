<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [

                'applicant_id' => 100001,
                'gender_id' => null,
                'name' => 'Tika Dahal',
                'name_np' => null,
                'email' => 'tkadahal@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('nirvikalpa'),
                'mobile_number' => '9841423969',
                'dob_np' => null,
                'dob_en' => null,
                'citizenship_number' => null,
                'citizenship_district_id' => null,
                'citizenship_issued_date' => null,
                'remember_token' => null,
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [

                'applicant_id' => 100002,
                'gender_id' => null,
                'name' => 'Arbinda Kumar Thakur',
                'name_np' => null,
                'email' => 'arbinda@nea.org.np',
                'email_verified_at' => null,
                'password' => bcrypt('arbinda@123'),
                'mobile_number' => '9841470172',
                'dob_np' => null,
                'dob_en' => null,
                'citizenship_number' => null,
                'citizenship_district_id' => null,
                'citizenship_issued_date' => null,
                'remember_token' => null,
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [

                'applicant_id' => 100003,
                'gender_id' => null,
                'name' => 'Kashiram Pokhrel',
                'name_np' => null,
                'email' => 'kashiram@nea.org.np',
                'email_verified_at' => null,
                'password' => bcrypt('kashi@123'),
                'mobile_number' => '9851189600',
                'dob_np' => null,
                'dob_en' => null,
                'citizenship_number' => null,
                'citizenship_district_id' => null,
                'citizenship_issued_date' => null,
                'remember_token' => null,
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [

                'applicant_id' => 100004,
                'gender_id' => null,
                'name' => 'Chandra Kant Adhikari',
                'name_np' => null,
                'email' => 'ckadhikari1981@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('chandra@123'),
                'mobile_number' => '9862271697',
                'dob_np' => null,
                'dob_en' => null,
                'citizenship_number' => null,
                'citizenship_district_id' => null,
                'citizenship_issued_date' => null,
                'remember_token' => null,
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [

                'applicant_id' => 100005,
                'gender_id' => null,
                'name' => 'Shova Bhusal',
                'name_np' => null,
                'email' => 'shova@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('shova@123'),
                'mobile_number' => '9800000000',
                'dob_np' => null,
                'dob_en' => null,
                'citizenship_number' => null,
                'citizenship_district_id' => null,
                'citizenship_issued_date' => null,
                'remember_token' => null,
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
        ];

        User::insert($users);
    }
}
