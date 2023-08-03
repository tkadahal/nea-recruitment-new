<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('levels')->delete();

        DB::table('levels')->insert(array(
            0 =>
            array(

                'group_id' => 1,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:11:46',
                'updated_at' => '2023-08-01 16:11:46',
                'deleted_at' => NULL,
            ),
            1 =>
            array(

                'group_id' => 1,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:11:53',
                'updated_at' => '2023-08-01 16:11:53',
                'deleted_at' => NULL,
            ),
            2 =>
            array(

                'group_id' => 1,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:12:01',
                'updated_at' => '2023-08-01 16:12:01',
                'deleted_at' => NULL,
            ),
            3 =>
            array(

                'group_id' => 1,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:12:11',
                'updated_at' => '2023-08-01 16:12:11',
                'deleted_at' => NULL,
            ),
            4 =>
            array(

                'group_id' => 1,
                'title' => 6,
                'active' => true,
                'created_at' => '2023-08-01 16:12:19',
                'updated_at' => '2023-08-01 16:12:19',
                'deleted_at' => NULL,
            ),
            5 =>
            array(

                'group_id' => 1,
                'title' => 5,
                'active' => true,
                'created_at' => '2023-08-01 16:12:25',
                'updated_at' => '2023-08-01 16:12:25',
                'deleted_at' => NULL,
            ),
            6 =>
            array(

                'group_id' => 1,
                'title' => 4,
                'active' => true,
                'created_at' => '2023-08-01 16:12:33',
                'updated_at' => '2023-08-01 16:12:33',
                'deleted_at' => NULL,
            ),
            7 =>
            array(

                'group_id' => 1,
                'title' => 3,
                'active' => true,
                'created_at' => '2023-08-01 16:12:40',
                'updated_at' => '2023-08-01 16:12:40',
                'deleted_at' => NULL,
            ),
            8 =>
            array(

                'group_id' => 2,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:12:48',
                'updated_at' => '2023-08-01 16:12:48',
                'deleted_at' => NULL,
            ),
            9 =>
            array(

                'group_id' => 2,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:12:55',
                'updated_at' => '2023-08-01 16:12:55',
                'deleted_at' => NULL,
            ),
            10 =>
            array(

                'group_id' => 2,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:13:02',
                'updated_at' => '2023-08-01 16:13:02',
                'deleted_at' => NULL,
            ),
            11 =>
            array(

                'group_id' => 2,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:13:09',
                'updated_at' => '2023-08-01 16:13:09',
                'deleted_at' => NULL,
            ),
            12 =>
            array(

                'group_id' => 2,
                'title' => 6,
                'active' => true,
                'created_at' => '2023-08-01 16:13:17',
                'updated_at' => '2023-08-01 16:13:17',
                'deleted_at' => NULL,
            ),
            13 =>
            array(

                'group_id' => 2,
                'title' => 5,
                'active' => true,
                'created_at' => '2023-08-01 16:14:09',
                'updated_at' => '2023-08-01 16:14:09',
                'deleted_at' => NULL,
            ),
            14 =>
            array(

                'group_id' => 2,
                'title' => 4,
                'active' => true,
                'created_at' => '2023-08-01 16:14:16',
                'updated_at' => '2023-08-01 16:14:16',
                'deleted_at' => NULL,
            ),
            15 =>
            array(

                'group_id' => 2,
                'title' => 3,
                'active' => true,
                'created_at' => '2023-08-01 16:14:23',
                'updated_at' => '2023-08-01 16:14:23',
                'deleted_at' => NULL,
            ),
            16 =>
            array(

                'group_id' => 3,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:14:31',
                'updated_at' => '2023-08-01 16:14:31',
                'deleted_at' => NULL,
            ),
            17 =>
            array(

                'group_id' => 3,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:14:39',
                'updated_at' => '2023-08-01 16:14:39',
                'deleted_at' => NULL,
            ),
            18 =>
            array(

                'group_id' => 3,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:14:45',
                'updated_at' => '2023-08-01 16:14:45',
                'deleted_at' => NULL,
            ),
            19 =>
            array(

                'group_id' => 3,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:14:53',
                'updated_at' => '2023-08-01 16:14:53',
                'deleted_at' => NULL,
            ),
            20 =>
            array(

                'group_id' => 3,
                'title' => 6,
                'active' => true,
                'created_at' => '2023-08-01 16:15:00',
                'updated_at' => '2023-08-01 16:15:00',
                'deleted_at' => NULL,
            ),
            21 =>
            array(

                'group_id' => 3,
                'title' => 5,
                'active' => true,
                'created_at' => '2023-08-01 16:15:08',
                'updated_at' => '2023-08-01 16:15:08',
                'deleted_at' => NULL,
            ),
            22 =>
            array(

                'group_id' => 3,
                'title' => 4,
                'active' => true,
                'created_at' => '2023-08-01 16:15:15',
                'updated_at' => '2023-08-01 16:15:15',
                'deleted_at' => NULL,
            ),
            23 =>
            array(

                'group_id' => 3,
                'title' => 3,
                'active' => true,
                'created_at' => '2023-08-01 16:15:25',
                'updated_at' => '2023-08-01 16:15:25',
                'deleted_at' => NULL,
            ),
            24 =>
            array(

                'group_id' => 4,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:15:41',
                'updated_at' => '2023-08-01 16:15:41',
                'deleted_at' => NULL,
            ),
            25 =>
            array(

                'group_id' => 4,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:15:49',
                'updated_at' => '2023-08-01 16:15:49',
                'deleted_at' => NULL,
            ),
            26 =>
            array(

                'group_id' => 4,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:15:57',
                'updated_at' => '2023-08-01 16:15:57',
                'deleted_at' => NULL,
            ),
            27 =>
            array(

                'group_id' => 4,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:16:05',
                'updated_at' => '2023-08-01 16:16:05',
                'deleted_at' => NULL,
            ),
            28 =>
            array(

                'group_id' => 5,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:16:17',
                'updated_at' => '2023-08-01 16:16:17',
                'deleted_at' => NULL,
            ),
            29 =>
            array(

                'group_id' => 5,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:16:24',
                'updated_at' => '2023-08-01 16:16:24',
                'deleted_at' => NULL,
            ),
            30 =>
            array(

                'group_id' => 5,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:16:33',
                'updated_at' => '2023-08-01 16:16:33',
                'deleted_at' => NULL,
            ),
            31 =>
            array(

                'group_id' => 5,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:16:41',
                'updated_at' => '2023-08-01 16:16:41',
                'deleted_at' => NULL,
            ),
            32 =>
            array(

                'group_id' => 5,
                'title' => 6,
                'active' => true,
                'created_at' => '2023-08-01 16:16:49',
                'updated_at' => '2023-08-01 16:16:49',
                'deleted_at' => NULL,
            ),
            33 =>
            array(

                'group_id' => 5,
                'title' => 5,
                'active' => true,
                'created_at' => '2023-08-01 16:16:57',
                'updated_at' => '2023-08-01 16:16:57',
                'deleted_at' => NULL,
            ),
            34 =>
            array(

                'group_id' => 5,
                'title' => 4,
                'active' => true,
                'created_at' => '2023-08-01 16:17:05',
                'updated_at' => '2023-08-01 16:17:05',
                'deleted_at' => NULL,
            ),
            35 =>
            array(

                'group_id' => 5,
                'title' => 3,
                'active' => true,
                'created_at' => '2023-08-01 16:17:13',
                'updated_at' => '2023-08-01 16:17:13',
                'deleted_at' => NULL,
            ),
            36 =>
            array(

                'group_id' => 6,
                'title' => 11,
                'active' => true,
                'created_at' => '2023-08-01 16:17:29',
                'updated_at' => '2023-08-01 16:17:29',
                'deleted_at' => NULL,
            ),
            37 =>
            array(

                'group_id' => 6,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:17:37',
                'updated_at' => '2023-08-01 16:17:37',
                'deleted_at' => NULL,
            ),
            38 =>
            array(

                'group_id' => 6,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:17:46',
                'updated_at' => '2023-08-01 16:17:46',
                'deleted_at' => NULL,
            ),
            39 =>
            array(

                'group_id' => 6,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:17:55',
                'updated_at' => '2023-08-01 16:17:55',
                'deleted_at' => NULL,
            ),
            40 =>
            array(

                'group_id' => 6,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:18:03',
                'updated_at' => '2023-08-01 16:18:03',
                'deleted_at' => NULL,
            ),
            41 =>
            array(

                'group_id' => 6,
                'title' => 6,
                'active' => true,
                'created_at' => '2023-08-01 16:18:12',
                'updated_at' => '2023-08-01 16:18:12',
                'deleted_at' => NULL,
            ),
            42 =>
            array(

                'group_id' => 6,
                'title' => 5,
                'active' => true,
                'created_at' => '2023-08-01 16:18:21',
                'updated_at' => '2023-08-01 16:18:21',
                'deleted_at' => NULL,
            ),
            43 =>
            array(

                'group_id' => 6,
                'title' => 4,
                'active' => true,
                'created_at' => '2023-08-01 16:18:29',
                'updated_at' => '2023-08-01 16:18:29',
                'deleted_at' => NULL,
            ),
            44 =>
            array(

                'group_id' => 6,
                'title' => 3,
                'active' => true,
                'created_at' => '2023-08-01 16:18:39',
                'updated_at' => '2023-08-01 16:18:39',
                'deleted_at' => NULL,
            ),
            45 =>
            array(

                'group_id' => 7,
                'title' => 11,
                'active' => true,
                'created_at' => '2023-08-01 16:18:51',
                'updated_at' => '2023-08-01 16:18:51',
                'deleted_at' => NULL,
            ),
            46 =>
            array(

                'group_id' => 7,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:18:59',
                'updated_at' => '2023-08-01 16:18:59',
                'deleted_at' => NULL,
            ),
            47 =>
            array(

                'group_id' => 7,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:19:08',
                'updated_at' => '2023-08-01 16:19:08',
                'deleted_at' => NULL,
            ),
            48 =>
            array(

                'group_id' => 7,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:19:17',
                'updated_at' => '2023-08-01 16:19:17',
                'deleted_at' => NULL,
            ),
            49 =>
            array(

                'group_id' => 7,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:19:26',
                'updated_at' => '2023-08-01 16:19:26',
                'deleted_at' => NULL,
            ),
            50 =>
            array(

                'group_id' => 7,
                'title' => 6,
                'active' => true,
                'created_at' => '2023-08-01 16:19:35',
                'updated_at' => '2023-08-01 16:19:42',
                'deleted_at' => NULL,
            ),
            51 =>
            array(

                'group_id' => 7,
                'title' => 5,
                'active' => true,
                'created_at' => '2023-08-01 16:19:52',
                'updated_at' => '2023-08-01 16:19:52',
                'deleted_at' => NULL,
            ),
            52 =>
            array(

                'group_id' => 7,
                'title' => 4,
                'active' => true,
                'created_at' => '2023-08-01 16:20:00',
                'updated_at' => '2023-08-01 16:20:00',
                'deleted_at' => NULL,
            ),
            53 =>
            array(

                'group_id' => 7,
                'title' => 3,
                'active' => true,
                'created_at' => '2023-08-01 16:20:09',
                'updated_at' => '2023-08-01 16:20:09',
                'deleted_at' => NULL,
            ),
            54 =>
            array(

                'group_id' => 8,
                'title' => 11,
                'active' => true,
                'created_at' => '2023-08-01 16:20:24',
                'updated_at' => '2023-08-01 16:20:24',
                'deleted_at' => NULL,
            ),
            55 =>
            array(

                'group_id' => 8,
                'title' => 10,
                'active' => true,
                'created_at' => '2023-08-01 16:20:32',
                'updated_at' => '2023-08-01 16:20:32',
                'deleted_at' => NULL,
            ),
            56 =>
            array(

                'group_id' => 8,
                'title' => 9,
                'active' => true,
                'created_at' => '2023-08-01 16:20:40',
                'updated_at' => '2023-08-01 16:20:40',
                'deleted_at' => NULL,
            ),
            57 =>
            array(

                'group_id' => 8,
                'title' => 8,
                'active' => true,
                'created_at' => '2023-08-01 16:20:50',
                'updated_at' => '2023-08-01 16:20:50',
                'deleted_at' => NULL,
            ),
            58 =>
            array(

                'group_id' => 8,
                'title' => 7,
                'active' => true,
                'created_at' => '2023-08-01 16:20:59',
                'updated_at' => '2023-08-01 16:20:59',
                'deleted_at' => NULL,
            ),
            59 =>
            array(

                'group_id' => 8,
                'title' => 6,
                'active' => true,
                'created_at' => '2023-08-01 16:21:08',
                'updated_at' => '2023-08-01 16:21:08',
                'deleted_at' => NULL,
            ),
            60 =>
            array(

                'group_id' => 8,
                'title' => 5,
                'active' => true,
                'created_at' => '2023-08-01 16:21:17',
                'updated_at' => '2023-08-01 16:21:17',
                'deleted_at' => NULL,
            ),
            61 =>
            array(

                'group_id' => 8,
                'title' => 4,
                'active' => true,
                'created_at' => '2023-08-01 16:21:26',
                'updated_at' => '2023-08-01 16:21:26',
                'deleted_at' => NULL,
            ),
            62 =>
            array(

                'group_id' => 8,
                'title' => 3,
                'active' => true,
                'created_at' => '2023-08-01 16:21:35',
                'updated_at' => '2023-08-01 16:21:35',
                'deleted_at' => NULL,
            ),
        ));
    }
}
