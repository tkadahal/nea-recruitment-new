<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('positions')->delete();

        DB::table('positions')->insert(array(
            0 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 1,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:14:48',
                'updated_at' => '2023-08-03 14:14:48',
                'deleted_at' => NULL,
            ),
            1 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 2,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:15:05',
                'updated_at' => '2023-08-03 14:15:05',
                'deleted_at' => NULL,
            ),
            2 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 3,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:15:20',
                'updated_at' => '2023-08-03 14:15:20',
                'deleted_at' => NULL,
            ),
            3 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 4,
                'title' => 'इन्जिनीयर',
                'active' => true,
                'created_at' => '2023-08-03 14:15:33',
                'updated_at' => '2023-08-03 14:15:33',
                'deleted_at' => NULL,
            ),
            4 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 5,
                'title' => 'सहायक इन्जिनियर',
                'active' => true,
                'created_at' => '2023-08-03 14:15:47',
                'updated_at' => '2023-08-03 14:15:47',
                'deleted_at' => NULL,
            ),
            5 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 6,
                'title' => 'सुपरभाईजर',
                'active' => true,
                'created_at' => '2023-08-03 14:16:37',
                'updated_at' => '2023-08-03 14:16:49',
                'deleted_at' => NULL,
            ),
            6 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 7,
                'title' => 'फोरमेन',
                'active' => true,
                'created_at' => '2023-08-03 14:17:03',
                'updated_at' => '2023-08-03 14:17:03',
                'deleted_at' => NULL,
            ),
            7 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 1,
                'level_id' => 8,
                'title' => 'इलेक्ट्रिसियन',
                'active' => true,
                'created_at' => '2023-08-03 14:17:14',
                'updated_at' => '2023-08-03 14:17:14',
                'deleted_at' => NULL,
            ),
            8 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 1,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:20:30',
                'updated_at' => '2023-08-03 14:20:30',
                'deleted_at' => NULL,
            ),
            9 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 2,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:20:44',
                'updated_at' => '2023-08-03 14:20:44',
                'deleted_at' => NULL,
            ),
            10 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 3,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:20:58',
                'updated_at' => '2023-08-03 14:20:58',
                'deleted_at' => NULL,
            ),
            11 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 4,
                'title' => 'इन्जिनीयर',
                'active' => true,
                'created_at' => '2023-08-03 14:21:08',
                'updated_at' => '2023-08-03 14:21:08',
                'deleted_at' => NULL,
            ),
            12 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 5,
                'title' => 'सहायक इन्जिनियर',
                'active' => true,
                'created_at' => '2023-08-03 14:21:21',
                'updated_at' => '2023-08-03 14:21:21',
                'deleted_at' => NULL,
            ),
            13 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 6,
                'title' => 'सुपरभाईजर',
                'active' => true,
                'created_at' => '2023-08-03 14:21:37',
                'updated_at' => '2023-08-03 14:21:37',
                'deleted_at' => NULL,
            ),
            14 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 7,
                'title' => 'फोरमेन',
                'active' => true,
                'created_at' => '2023-08-03 14:21:49',
                'updated_at' => '2023-08-03 14:21:49',
                'deleted_at' => NULL,
            ),
            15 =>
            array(

                'group_id' => 1,
                'sub_group_id' => 2,
                'level_id' => 8,
                'title' => 'जुनियर टेक्निसियन',
                'active' => true,
                'created_at' => '2023-08-03 14:22:02',
                'updated_at' => '2023-08-03 14:22:02',
                'deleted_at' => NULL,
            ),
            16 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 9,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:23:01',
                'updated_at' => '2023-08-03 14:23:01',
                'deleted_at' => NULL,
            ),
            17 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 10,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:23:13',
                'updated_at' => '2023-08-03 14:23:13',
                'deleted_at' => NULL,
            ),
            18 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 11,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:23:25',
                'updated_at' => '2023-08-03 14:23:25',
                'deleted_at' => NULL,
            ),
            19 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 12,
                'title' => 'इन्जिनीयर',
                'active' => true,
                'created_at' => '2023-08-03 14:23:34',
                'updated_at' => '2023-08-03 14:23:34',
                'deleted_at' => NULL,
            ),
            20 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 13,
                'title' => 'सहायक इन्जिनियर',
                'active' => true,
                'created_at' => '2023-08-03 14:23:48',
                'updated_at' => '2023-08-03 14:23:48',
                'deleted_at' => NULL,
            ),
            21 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 14,
                'title' => 'सुपरभाईजर',
                'active' => true,
                'created_at' => '2023-08-03 14:24:00',
                'updated_at' => '2023-08-03 14:24:00',
                'deleted_at' => NULL,
            ),
            22 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 15,
                'title' => 'फोरमेन',
                'active' => true,
                'created_at' => '2023-08-03 14:24:10',
                'updated_at' => '2023-08-03 14:24:10',
                'deleted_at' => NULL,
            ),
            23 =>
            array(

                'group_id' => 2,
                'sub_group_id' => 3,
                'level_id' => 16,
                'title' => 'जुनियर मिस्त्री',
                'active' => true,
                'created_at' => '2023-08-03 14:24:24',
                'updated_at' => '2023-08-03 14:24:24',
                'deleted_at' => NULL,
            ),
            24 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 17,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:26:21',
                'updated_at' => '2023-08-03 14:26:21',
                'deleted_at' => NULL,
            ),
            25 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 18,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:26:32',
                'updated_at' => '2023-08-03 14:26:32',
                'deleted_at' => NULL,
            ),
            26 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 19,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:26:45',
                'updated_at' => '2023-08-03 14:26:45',
                'deleted_at' => NULL,
            ),
            27 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 20,
                'title' => 'इन्जिनीयर',
                'active' => true,
                'created_at' => '2023-08-03 14:26:58',
                'updated_at' => '2023-08-03 14:26:58',
                'deleted_at' => NULL,
            ),
            28 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 21,
                'title' => 'सहायक इन्जिनियर',
                'active' => true,
                'created_at' => '2023-08-03 14:27:11',
                'updated_at' => '2023-08-03 14:27:11',
                'deleted_at' => NULL,
            ),
            29 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 22,
                'title' => 'सुपरभाईजर',
                'active' => true,
                'created_at' => '2023-08-03 14:27:21',
                'updated_at' => '2023-08-03 14:27:21',
                'deleted_at' => NULL,
            ),
            30 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 23,
                'title' => 'फोरमेन',
                'active' => true,
                'created_at' => '2023-08-03 14:27:33',
                'updated_at' => '2023-08-03 14:27:33',
                'deleted_at' => NULL,
            ),
            31 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 24,
                'title' => 'जुनियर टेक्निसियन',
                'active' => true,
                'created_at' => '2023-08-03 14:27:46',
                'updated_at' => '2023-08-03 14:27:46',
                'deleted_at' => NULL,
            ),
            32 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 5,
                'level_id' => 17,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:29:53',
                'updated_at' => '2023-08-03 14:29:53',
                'deleted_at' => NULL,
            ),
            33 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 5,
                'level_id' => 18,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:30:09',
                'updated_at' => '2023-08-03 14:30:09',
                'deleted_at' => NULL,
            ),
            34 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 5,
                'level_id' => 19,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:30:22',
                'updated_at' => '2023-08-03 14:30:22',
                'deleted_at' => NULL,
            ),
            35 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 5,
                'level_id' => 20,
                'title' => 'सर्भे इन्जिनीयर',
                'active' => true,
                'created_at' => '2023-08-03 14:30:35',
                'updated_at' => '2023-08-03 14:30:35',
                'deleted_at' => NULL,
            ),
            36 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 4,
                'level_id' => 21,
                'title' => 'सहायक सर्भे अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:30:51',
                'updated_at' => '2023-08-03 14:30:51',
                'deleted_at' => NULL,
            ),
            37 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 5,
                'level_id' => 22,
                'title' => 'सर्भेयर',
                'active' => true,
                'created_at' => '2023-08-03 14:31:05',
                'updated_at' => '2023-08-03 14:31:05',
                'deleted_at' => NULL,
            ),
            38 =>
            array(

                'group_id' => 3,
                'sub_group_id' => 5,
                'level_id' => 23,
                'title' => 'सहायक सर्भेयर',
                'active' => true,
                'created_at' => '2023-08-03 14:31:26',
                'updated_at' => '2023-08-03 14:31:26',
                'deleted_at' => NULL,
            ),
            39 =>
            array(

                'group_id' => 4,
                'sub_group_id' => 6,
                'level_id' => 25,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:32:12',
                'updated_at' => '2023-08-03 14:32:12',
                'deleted_at' => NULL,
            ),
            40 =>
            array(

                'group_id' => 4,
                'sub_group_id' => 6,
                'level_id' => 26,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:32:25',
                'updated_at' => '2023-08-03 14:32:25',
                'deleted_at' => NULL,
            ),
            41 =>
            array(

                'group_id' => 4,
                'sub_group_id' => 6,
                'level_id' => 27,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:32:37',
                'updated_at' => '2023-08-03 14:32:37',
                'deleted_at' => NULL,
            ),
            42 =>
            array(

                'group_id' => 4,
                'sub_group_id' => 6,
                'level_id' => 28,
                'title' => 'इन्जिनीयर',
                'active' => true,
                'created_at' => '2023-08-03 14:32:49',
                'updated_at' => '2023-08-03 14:32:49',
                'deleted_at' => NULL,
            ),
            43 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 7,
                'level_id' => 29,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:34:01',
                'updated_at' => '2023-08-03 14:34:01',
                'deleted_at' => NULL,
            ),
            44 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 7,
                'level_id' => 30,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:34:12',
                'updated_at' => '2023-08-03 14:34:12',
                'deleted_at' => NULL,
            ),
            45 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 7,
                'level_id' => 31,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:34:24',
                'updated_at' => '2023-08-03 14:34:24',
                'deleted_at' => NULL,
            ),
            46 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 7,
                'level_id' => 32,
                'title' => 'वातावरणविद',
                'active' => true,
                'created_at' => '2023-08-03 14:34:36',
                'updated_at' => '2023-08-03 14:34:36',
                'deleted_at' => NULL,
            ),
            47 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 8,
                'level_id' => 29,
                'title' => 'प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:36:28',
                'updated_at' => '2023-08-03 14:36:28',
                'deleted_at' => NULL,
            ),
            48 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 8,
                'level_id' => 30,
                'title' => 'उप-प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:36:44',
                'updated_at' => '2023-08-03 14:36:44',
                'deleted_at' => NULL,
            ),
            49 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 8,
                'level_id' => 31,
                'title' => 'सहायक प्रबन्धक',
                'active' => true,
                'created_at' => '2023-08-03 14:36:59',
                'updated_at' => '2023-08-03 14:36:59',
                'deleted_at' => NULL,
            ),
            50 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 8,
                'level_id' => 32,
                'title' => 'जियोलजिष्ट',
                'active' => true,
                'created_at' => '2023-08-03 14:37:15',
                'updated_at' => '2023-08-03 14:37:15',
                'deleted_at' => NULL,
            ),
            51 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 9,
                'level_id' => 32,
                'title' => 'प्राबिधिक अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:39:14',
                'updated_at' => '2023-08-03 14:39:14',
                'deleted_at' => NULL,
            ),
            52 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 9,
                'level_id' => 33,
                'title' => 'सहायक प्राबिधिक अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:39:29',
                'updated_at' => '2023-08-03 14:39:29',
                'deleted_at' => NULL,
            ),
            53 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 9,
                'level_id' => 34,
                'title' => 'सिनियर ड्राईभर',
                'active' => true,
                'created_at' => '2023-08-03 14:39:45',
                'updated_at' => '2023-08-03 14:39:45',
                'deleted_at' => NULL,
            ),
            54 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 9,
                'level_id' => 35,
                'title' => 'फोरमेन ड्राईभर',
                'active' => true,
                'created_at' => '2023-08-03 14:40:04',
                'updated_at' => '2023-08-03 14:40:04',
                'deleted_at' => NULL,
            ),
            55 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 9,
                'level_id' => 36,
                'title' => 'ड्राईभर',
                'active' => true,
                'created_at' => '2023-08-03 14:40:18',
                'updated_at' => '2023-08-03 14:40:18',
                'deleted_at' => NULL,
            ),
            56 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 10,
                'level_id' => 34,
                'title' => 'कम्पाउण्डर',
                'active' => true,
                'created_at' => '2023-08-03 14:41:41',
                'updated_at' => '2023-08-03 14:41:41',
                'deleted_at' => NULL,
            ),
            57 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 11,
                'level_id' => 34,
                'title' => 'सुपरभाईजर',
                'active' => true,
                'created_at' => '2023-08-03 14:42:36',
                'updated_at' => '2023-08-03 14:42:36',
                'deleted_at' => NULL,
            ),
            58 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 11,
                'level_id' => 35,
                'title' => 'सिनियर प्लम्बर',
                'active' => true,
                'created_at' => '2023-08-03 14:42:51',
                'updated_at' => '2023-08-03 14:42:51',
                'deleted_at' => NULL,
            ),
            59 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 11,
                'level_id' => 36,
                'title' => 'प्लम्बर',
                'active' => true,
                'created_at' => '2023-08-03 14:43:03',
                'updated_at' => '2023-08-03 14:43:03',
                'deleted_at' => NULL,
            ),
            60 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 12,
                'level_id' => 34,
                'title' => 'सुपरभाईजर',
                'active' => true,
                'created_at' => '2023-08-03 14:43:47',
                'updated_at' => '2023-08-03 14:43:47',
                'deleted_at' => NULL,
            ),
            61 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 12,
                'level_id' => 35,
                'title' => 'सिनियर गोताखोर',
                'active' => true,
                'created_at' => '2023-08-03 14:44:01',
                'updated_at' => '2023-08-03 14:44:01',
                'deleted_at' => NULL,
            ),
            62 =>
            array(

                'group_id' => 5,
                'sub_group_id' => 12,
                'level_id' => 36,
                'title' => 'गोताखोर',
                'active' => true,
                'created_at' => '2023-08-03 14:44:13',
                'updated_at' => '2023-08-03 14:44:13',
                'deleted_at' => NULL,
            ),
            63 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 37,
                'title' => 'निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:49:32',
                'updated_at' => '2023-08-03 14:49:32',
                'deleted_at' => NULL,
            ),
            64 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 38,
                'title' => 'सह-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:50:36',
                'updated_at' => '2023-08-03 14:50:36',
                'deleted_at' => NULL,
            ),
            65 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 39,
                'title' => 'उप-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:50:50',
                'updated_at' => '2023-08-03 14:50:50',
                'deleted_at' => NULL,
            ),
            66 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 40,
                'title' => 'सहायक निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:51:06',
                'updated_at' => '2023-08-03 14:51:06',
                'deleted_at' => NULL,
            ),
            67 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 41,
                'title' => 'प्रशासकीय अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:51:30',
                'updated_at' => '2023-08-03 14:51:30',
                'deleted_at' => NULL,
            ),
            68 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 42,
                'title' => 'सहायक प्रशासकीय अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:51:45',
                'updated_at' => '2023-08-03 14:51:45',
                'deleted_at' => NULL,
            ),
            69 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 43,
                'title' => 'बरिष्ठ सहायक',
                'active' => true,
                'created_at' => '2023-08-03 14:52:00',
                'updated_at' => '2023-08-03 14:52:00',
                'deleted_at' => NULL,
            ),
            70 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 44,
                'title' => 'कार्यालय सहायक',
                'active' => true,
                'created_at' => '2023-08-03 14:52:15',
                'updated_at' => '2023-08-03 14:52:15',
                'deleted_at' => NULL,
            ),
            71 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 13,
                'level_id' => 45,
                'title' => 'मिटररिडर',
                'active' => true,
                'created_at' => '2023-08-03 14:52:27',
                'updated_at' => '2023-08-03 14:52:27',
                'deleted_at' => NULL,
            ),
            72 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 15,
                'level_id' => 42,
                'title' => 'सहायक कम्प्युटर अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:53:03',
                'updated_at' => '2023-08-03 14:53:03',
                'deleted_at' => NULL,
            ),
            73 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 15,
                'level_id' => 43,
                'title' => 'कम्प्युटर अपरेटर',
                'active' => true,
                'created_at' => '2023-08-03 14:53:22',
                'updated_at' => '2023-08-03 14:53:22',
                'deleted_at' => NULL,
            ),
            74 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 15,
                'level_id' => 44,
                'title' => 'सहायक कम्प्युटर अपरेटर',
                'active' => true,
                'created_at' => '2023-08-03 14:53:36',
                'updated_at' => '2023-08-03 14:53:36',
                'deleted_at' => NULL,
            ),
            75 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 15,
                'level_id' => 45,
                'title' => 'जुनियर कम्प्युटर अपरेटर',
                'active' => true,
                'created_at' => '2023-08-03 14:53:55',
                'updated_at' => '2023-08-03 14:53:55',
                'deleted_at' => NULL,
            ),
            76 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 14,
                'level_id' => 38,
                'title' => 'सह-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:54:52',
                'updated_at' => '2023-08-03 14:54:52',
                'deleted_at' => NULL,
            ),
            77 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 14,
                'level_id' => 39,
                'title' => 'उप-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:55:09',
                'updated_at' => '2023-08-03 14:55:09',
                'deleted_at' => NULL,
            ),
            78 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 14,
                'level_id' => 40,
                'title' => 'सहायक निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:55:25',
                'updated_at' => '2023-08-03 14:55:25',
                'deleted_at' => NULL,
            ),
            79 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 14,
                'level_id' => 41,
                'title' => 'कानून अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:55:42',
                'updated_at' => '2023-08-03 14:55:42',
                'deleted_at' => NULL,
            ),
            80 =>
            array(

                'group_id' => 6,
                'sub_group_id' => 14,
                'level_id' => 42,
                'title' => 'सहायक कानून अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 14:56:00',
                'updated_at' => '2023-08-03 14:56:00',
                'deleted_at' => NULL,
            ),
            81 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 46,
                'title' => 'निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:59:09',
                'updated_at' => '2023-08-03 14:59:09',
                'deleted_at' => NULL,
            ),
            82 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 47,
                'title' => 'सह-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:59:22',
                'updated_at' => '2023-08-03 14:59:22',
                'deleted_at' => NULL,
            ),
            83 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 48,
                'title' => 'उप-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:59:35',
                'updated_at' => '2023-08-03 14:59:35',
                'deleted_at' => NULL,
            ),
            84 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 49,
                'title' => 'सहायक निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 14:59:48',
                'updated_at' => '2023-08-03 14:59:48',
                'deleted_at' => NULL,
            ),
            85 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 50,
                'title' => 'लेखा अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 15:00:07',
                'updated_at' => '2023-08-03 15:00:07',
                'deleted_at' => NULL,
            ),
            86 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 51,
                'title' => 'सहायक लेखा अधिकृत',
                'active' => true,
                'created_at' => '2023-08-03 15:00:27',
                'updated_at' => '2023-08-03 15:00:27',
                'deleted_at' => NULL,
            ),
            87 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 52,
                'title' => 'लेखापाल / स्टोरकिपर',
                'active' => true,
                'created_at' => '2023-08-03 15:00:44',
                'updated_at' => '2023-08-03 15:00:44',
                'deleted_at' => NULL,
            ),
            88 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 53,
                'title' => 'सहायक लेखापाल / सहायक स्टोरकिपर',
                'active' => true,
                'created_at' => '2023-08-03 15:00:59',
                'updated_at' => '2023-08-03 15:00:59',
                'deleted_at' => NULL,
            ),
            89 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 16,
                'level_id' => 54,
                'title' => 'क्लर्क',
                'active' => true,
                'created_at' => '2023-08-03 15:01:16',
                'updated_at' => '2023-08-03 15:01:16',
                'deleted_at' => NULL,
            ),
            90 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 17,
                'level_id' => 49,
                'title' => 'सिनियर चार्टर्ड एकाउन्टेन्ट',
                'active' => true,
                'created_at' => '2023-08-03 15:02:57',
                'updated_at' => '2023-08-03 15:02:57',
                'deleted_at' => NULL,
            ),
            91 =>
            array(

                'group_id' => 7,
                'sub_group_id' => 17,
                'level_id' => 50,
                'title' => 'चार्टर्ड एकाउन्टेन्ट',
                'active' => true,
                'created_at' => '2023-08-03 15:03:16',
                'updated_at' => '2023-08-03 15:03:16',
                'deleted_at' => NULL,
            ),
            92 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 18,
                'level_id' => 55,
                'title' => 'निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:05:03',
                'updated_at' => '2023-08-03 15:05:03',
                'deleted_at' => NULL,
            ),
            93 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 18,
                'level_id' => 56,
                'title' => 'सह-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:05:16',
                'updated_at' => '2023-08-03 15:05:16',
                'deleted_at' => NULL,
            ),
            94 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 18,
                'level_id' => 57,
                'title' => 'उप-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:05:32',
                'updated_at' => '2023-08-03 15:05:32',
                'deleted_at' => NULL,
            ),
            95 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 18,
                'level_id' => 3,
                'title' => 'सहायक निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:05:55',
                'updated_at' => '2023-08-03 15:06:17',
                'deleted_at' => NULL,
            ),
            96 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 18,
                'level_id' => 59,
                'title' => 'अर्थशास्त्री',
                'active' => true,
                'created_at' => '2023-08-03 15:06:35',
                'updated_at' => '2023-08-03 15:06:35',
                'deleted_at' => NULL,
            ),
            97 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 19,
                'level_id' => 57,
                'title' => 'उप-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:07:01',
                'updated_at' => '2023-08-03 15:07:01',
                'deleted_at' => NULL,
            ),
            98 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 19,
                'level_id' => 58,
                'title' => 'सहायक निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:07:19',
                'updated_at' => '2023-08-03 15:07:19',
                'deleted_at' => NULL,
            ),
            99 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 19,
                'level_id' => 59,
                'title' => 'समाजशास्त्री',
                'active' => true,
                'created_at' => '2023-08-03 15:07:38',
                'updated_at' => '2023-08-03 15:07:38',
                'deleted_at' => NULL,
            ),
            100 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 20,
                'level_id' => 57,
                'title' => 'उप-निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:07:59',
                'updated_at' => '2023-08-03 15:07:59',
                'deleted_at' => NULL,
            ),
            101 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 20,
                'level_id' => 58,
                'title' => 'सहायक निर्देशक',
                'active' => true,
                'created_at' => '2023-08-03 15:08:14',
                'updated_at' => '2023-08-03 15:08:14',
                'deleted_at' => NULL,
            ),
            102 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 20,
                'level_id' => 4,
                'title' => 'तथ्याङ्कशास्त्री',
                'active' => true,
                'created_at' => '2023-08-03 15:08:31',
                'updated_at' => '2023-08-03 15:08:53',
                'deleted_at' => NULL,
            ),
            103 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 21,
                'level_id' => 61,
                'title' => 'हेडगार्ड कमाण्डर',
                'active' => true,
                'created_at' => '2023-08-03 15:10:33',
                'updated_at' => '2023-08-03 15:10:33',
                'deleted_at' => NULL,
            ),
            104 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 21,
                'level_id' => 62,
                'title' => 'गार्ड कमाण्डर',
                'active' => true,
                'created_at' => '2023-08-03 15:10:49',
                'updated_at' => '2023-08-03 15:10:49',
                'deleted_at' => NULL,
            ),
            105 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 21,
                'level_id' => 63,
                'title' => 'सुरक्षागार्ड',
                'active' => true,
                'created_at' => '2023-08-03 15:11:04',
                'updated_at' => '2023-08-03 15:11:04',
                'deleted_at' => NULL,
            ),
            106 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 22,
                'level_id' => 62,
                'title' => 'हेड कुक',
                'active' => true,
                'created_at' => '2023-08-03 15:11:27',
                'updated_at' => '2023-08-03 15:11:27',
                'deleted_at' => NULL,
            ),
            107 =>
            array(

                'group_id' => 8,
                'sub_group_id' => 22,
                'level_id' => 63,
                'title' => 'कुक',
                'active' => true,
                'created_at' => '2023-08-03 15:11:41',
                'updated_at' => '2023-08-03 15:11:41',
                'deleted_at' => NULL,
            ),
        ));
    }
}
