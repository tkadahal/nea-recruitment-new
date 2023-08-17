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

        DB::table('advertisements')->insert(array(
            0 =>
            array(

                'category_id' => 1,
                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 3,
                'position_id' => 3,
                'designation_id' => 1,
                'qualification_id' => 3,
                'exam_center_id' => NULL,
                'fiscal_year_id' => 21,
                'advertisement_num' => 'asdfsdf',
                'open_fee' => 10,
                'samabeshi_fee' => 3,
                'training_period' => NULL,
                'experience_period' => NULL,
                'experience_calculation_period' => NULL,
                'start_date_np' => '2080-04-01',
                'start_date_en' => '2023-07-17',
                'end_date_np' => '2080-04-28',
                'end_date_en' => '2023-08-13',
                'penalty_end_date_np' => '2080-04-32',
                'penalty_end_date_en' => '2023-08-17',
                'active' => true,
                'created_at' => '2023-08-07 12:01:21',
                'updated_at' => '2023-08-07 12:01:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array(

                'category_id' => 2,
                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 40,
                'position_id' => 67,
                'designation_id' => 1,
                'qualification_id' => 3,
                'exam_center_id' => NULL,
                'fiscal_year_id' => 21,
                'advertisement_num' => 'asdfsadfsadf',
                'open_fee' => 10,
                'samabeshi_fee' => 3,
                'training_period' => NULL,
                'experience_period' => NULL,
                'experience_calculation_period' => NULL,
                'start_date_np' => '2080-04-01',
                'start_date_en' => '2023-07-17',
                'end_date_np' => '2080-04-28',
                'end_date_en' => '2023-08-13',
                'penalty_end_date_np' => '2080-04-32',
                'penalty_end_date_en' => '2023-08-17',
                'active' => true,
                'created_at' => '2023-08-07 12:01:59',
                'updated_at' => '2023-08-07 12:01:59',
                'deleted_at' => NULL,
            ),
            2 =>
            array(

                'category_id' => 1,
                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 12,
                'position_id' => 20,
                'designation_id' => 1,
                'qualification_id' => 3,
                'exam_center_id' => 1,
                'fiscal_year_id' => 21,
                'advertisement_num' => '3',
                'open_fee' => 10,
                'samabeshi_fee' => 2,
                'training_period' => NULL,
                'experience_period' => NULL,
                'experience_calculation_period' => NULL,
                'start_date_np' => '2080-04-01',
                'start_date_en' => '2023-07-17',
                'end_date_np' => '2080-04-28',
                'end_date_en' => '2023-08-13',
                'penalty_end_date_np' => '2080-04-32',
                'penalty_end_date_en' => '2023-08-17',
                'active' => true,
                'created_at' => '2023-08-07 12:02:45',
                'updated_at' => '2023-08-07 12:02:45',
                'deleted_at' => NULL,
            ),
        ));
    }
}
