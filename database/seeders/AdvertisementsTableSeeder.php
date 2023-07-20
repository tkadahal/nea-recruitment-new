<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementsTableSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('advertisements')->delete();

        DB::table('advertisements')->insert([
            0 => [
                'id' => 1,
                'category_id' => 2,
                'group_id' => 6,
                'sub_group_id' => 14,
                'level_id' => 3,
                'designation_id' => 1,
                'qualification_id' => 4,
                'exam_center_id' => null,
                'fiscal_year_id' => 21,
                'advertisement_num' => '1111',
                'open_fee' => 10,
                'samabeshi_fee' => 2,
                'training_period' => 2,
                'experience_period' => 45,
                'start_date_np' => '2080-04-01',
                'start_date_en' => '2023-07-17',
                'end_date_np' => '2080-04-28',
                'end_date_en' => '2023-08-13',
                'penalty_end_date_np' => '2080-04-32',
                'penalty_end_date_en' => '2023-08-17',
                'active' => 1,
                'created_at' => '2023-07-19 20:02:07',
                'updated_at' => '2023-07-19 20:04:47',
                'deleted_at' => null,
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'group_id' => 2,
                'sub_group_id' => 4,
                'level_id' => 2,
                'designation_id' => 1,
                'qualification_id' => 4,
                'exam_center_id' => null,
                'fiscal_year_id' => 21,
                'advertisement_num' => '2222',
                'open_fee' => 12,
                'samabeshi_fee' => 3,
                'training_period' => 10,
                'experience_period' => 22,
                'start_date_np' => '2080-04-01',
                'start_date_en' => '2023-07-17',
                'end_date_np' => '2080-04-28',
                'end_date_en' => '2023-08-13',
                'penalty_end_date_np' => '2080-04-32',
                'penalty_end_date_en' => '2023-08-17',
                'active' => 1,
                'created_at' => '2023-07-19 20:03:06',
                'updated_at' => '2023-07-19 20:04:46',
                'deleted_at' => null,
            ],
            2 => [
                'id' => 3,
                'category_id' => 1,
                'group_id' => 3,
                'sub_group_id' => 6,
                'level_id' => 5,
                'designation_id' => 4,
                'qualification_id' => 3,
                'exam_center_id' => 5,
                'fiscal_year_id' => 21,
                'advertisement_num' => '3333',
                'open_fee' => 12,
                'samabeshi_fee' => 4,
                'training_period' => 17,
                'experience_period' => 12,
                'start_date_np' => '2080-04-01',
                'start_date_en' => '2023-07-17',
                'end_date_np' => '2080-04-28',
                'end_date_en' => '2023-08-13',
                'penalty_end_date_np' => '2080-04-32',
                'penalty_end_date_en' => '2023-08-17',
                'active' => 1,
                'created_at' => '2023-07-19 20:04:28',
                'updated_at' => '2023-07-19 20:04:45',
                'deleted_at' => null,
            ],
        ]);
    }
}
