<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('permissions')->delete();

        DB::table('permissions')->insert([
            0 => [

                'title' => 'adminMenu_access',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            1 => [

                'title' => 'user_management_access',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            2 => [

                'title' => 'permission_access',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            3 => [

                'title' => 'permission_create',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            4 => [

                'title' => 'permission_edit',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            5 => [

                'title' => 'permission_show',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            6 => [

                'title' => 'permission_delete',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            7 => [

                'title' => 'role_access',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            8 => [

                'title' => 'role_create',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            9 => [

                'title' => 'role_edit',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            10 => [

                'title' => 'role_show',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            11 => [

                'title' => 'role_delete',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            12 => [

                'title' => 'user_access',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            13 => [

                'title' => 'user_create',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            14 => [

                'title' => 'user_edit',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            15 => [

                'title' => 'user_show',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            16 => [

                'title' => 'user_delete',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            17 => [

                'title' => 'state_management_access',
                'created_at' => '2023-07-07 12:00:29',
                'updated_at' => '2023-07-07 12:00:29',
                'deleted_at' => null,
            ],
            18 => [

                'title' => 'province_access',
                'created_at' => '2023-07-07 12:00:35',
                'updated_at' => '2023-07-07 12:00:35',
                'deleted_at' => null,
            ],
            19 => [

                'title' => 'province_create',
                'created_at' => '2023-07-07 12:00:42',
                'updated_at' => '2023-07-07 12:00:42',
                'deleted_at' => null,
            ],
            20 => [

                'title' => 'province_edit',
                'created_at' => '2023-07-07 12:00:48',
                'updated_at' => '2023-07-07 12:00:48',
                'deleted_at' => null,
            ],
            21 => [

                'title' => 'province_show',
                'created_at' => '2023-07-07 12:00:55',
                'updated_at' => '2023-07-07 12:00:55',
                'deleted_at' => null,
            ],
            22 => [

                'title' => 'province_delete',
                'created_at' => '2023-07-07 12:01:02',
                'updated_at' => '2023-07-07 12:01:02',
                'deleted_at' => null,
            ],
            23 => [

                'title' => 'district_access',
                'created_at' => '2023-07-07 12:01:08',
                'updated_at' => '2023-07-07 12:01:08',
                'deleted_at' => null,
            ],
            24 => [

                'title' => 'district_create',
                'created_at' => '2023-07-07 12:01:15',
                'updated_at' => '2023-07-07 12:01:15',
                'deleted_at' => null,
            ],
            25 => [

                'title' => 'district_edit',
                'created_at' => '2023-07-07 12:01:22',
                'updated_at' => '2023-07-07 12:01:22',
                'deleted_at' => null,
            ],
            26 => [

                'title' => 'district_show',
                'created_at' => '2023-07-07 12:01:31',
                'updated_at' => '2023-07-07 12:01:31',
                'deleted_at' => null,
            ],
            27 => [

                'title' => 'district_delete',
                'created_at' => '2023-07-07 12:01:38',
                'updated_at' => '2023-07-07 12:01:38',
                'deleted_at' => null,
            ],
            28 => [

                'title' => 'municipality_access',
                'created_at' => '2023-07-07 12:01:46',
                'updated_at' => '2023-07-07 12:01:46',
                'deleted_at' => null,
            ],
            29 => [

                'title' => 'municipality_create',
                'created_at' => '2023-07-07 12:01:53',
                'updated_at' => '2023-07-07 12:01:53',
                'deleted_at' => null,
            ],
            30 => [

                'title' => 'municipality_edit',
                'created_at' => '2023-07-07 12:01:59',
                'updated_at' => '2023-07-07 12:01:59',
                'deleted_at' => null,
            ],
            31 => [

                'title' => 'municipality_show',
                'created_at' => '2023-07-07 12:02:06',
                'updated_at' => '2023-07-07 12:02:06',
                'deleted_at' => null,
            ],
            32 => [

                'title' => 'municipality_delete',
                'created_at' => '2023-07-07 12:02:13',
                'updated_at' => '2023-07-07 12:02:13',
                'deleted_at' => null,
            ],
            33 => [

                'title' => 'category_management_access',
                'created_at' => '2023-07-07 12:02:21',
                'updated_at' => '2023-07-07 12:02:21',
                'deleted_at' => null,
            ],
            34 => [

                'title' => 'category_access',
                'created_at' => '2023-07-07 12:02:28',
                'updated_at' => '2023-07-07 12:02:28',
                'deleted_at' => null,
            ],
            35 => [

                'title' => 'category_create',
                'created_at' => '2023-07-07 12:02:35',
                'updated_at' => '2023-07-07 12:02:35',
                'deleted_at' => null,
            ],
            36 => [

                'title' => 'category_edit',
                'created_at' => '2023-07-07 12:02:42',
                'updated_at' => '2023-07-07 12:02:42',
                'deleted_at' => null,
            ],
            37 => [

                'title' => 'category_show',
                'created_at' => '2023-07-07 12:02:49',
                'updated_at' => '2023-07-07 12:02:49',
                'deleted_at' => null,
            ],
            38 => [

                'title' => 'category_delete',
                'created_at' => '2023-07-07 12:02:57',
                'updated_at' => '2023-07-07 12:02:57',
                'deleted_at' => null,
            ],
            39 => [

                'title' => 'group_access',
                'created_at' => '2023-07-07 12:03:07',
                'updated_at' => '2023-07-07 12:03:07',
                'deleted_at' => null,
            ],
            40 => [

                'title' => 'group_create',
                'created_at' => '2023-07-07 12:03:15',
                'updated_at' => '2023-07-07 12:03:15',
                'deleted_at' => null,
            ],
            41 => [

                'title' => 'group_edit',
                'created_at' => '2023-07-07 12:03:22',
                'updated_at' => '2023-07-07 12:03:22',
                'deleted_at' => null,
            ],
            42 => [

                'title' => 'group_show',
                'created_at' => '2023-07-07 12:03:29',
                'updated_at' => '2023-07-07 12:03:29',
                'deleted_at' => null,
            ],
            43 => [

                'title' => 'group_delete',
                'created_at' => '2023-07-07 12:03:36',
                'updated_at' => '2023-07-07 12:03:36',
                'deleted_at' => null,
            ],
            44 => [

                'title' => 'subGroup_access',
                'created_at' => '2023-07-07 12:03:45',
                'updated_at' => '2023-07-07 12:03:45',
                'deleted_at' => null,
            ],
            45 => [

                'title' => 'subGroup_create',
                'created_at' => '2023-07-07 12:03:52',
                'updated_at' => '2023-07-07 12:03:52',
                'deleted_at' => null,
            ],
            46 => [

                'title' => 'subGroup_edit',
                'created_at' => '2023-07-07 12:04:00',
                'updated_at' => '2023-07-07 12:04:00',
                'deleted_at' => null,
            ],
            47 => [

                'title' => 'subGroup_show',
                'created_at' => '2023-07-07 12:04:06',
                'updated_at' => '2023-07-07 12:04:06',
                'deleted_at' => null,
            ],
            48 => [

                'title' => 'subGroup_delete',
                'created_at' => '2023-07-07 12:04:14',
                'updated_at' => '2023-07-07 12:04:14',
                'deleted_at' => null,
            ],
            49 => [

                'title' => 'level_access',
                'created_at' => '2023-07-07 12:04:21',
                'updated_at' => '2023-07-07 12:04:21',
                'deleted_at' => null,
            ],
            50 => [

                'title' => 'level_create',
                'created_at' => '2023-07-07 12:04:28',
                'updated_at' => '2023-07-07 12:04:28',
                'deleted_at' => null,
            ],
            51 => [

                'title' => 'level_edit',
                'created_at' => '2023-07-07 12:04:34',
                'updated_at' => '2023-07-07 12:04:34',
                'deleted_at' => null,
            ],
            52 => [

                'title' => 'level_show',
                'created_at' => '2023-07-07 12:04:40',
                'updated_at' => '2023-07-07 12:04:40',
                'deleted_at' => null,
            ],
            53 => [

                'title' => 'level_delete',
                'created_at' => '2023-07-07 12:04:47',
                'updated_at' => '2023-07-07 12:04:47',
                'deleted_at' => null,
            ],
            54 => [

                'title' => 'position_access',
                'created_at' => '2023-07-07 12:04:55',
                'updated_at' => '2023-07-07 12:04:55',
                'deleted_at' => null,
            ],
            55 => [

                'title' => 'position_create',
                'created_at' => '2023-07-07 12:05:01',
                'updated_at' => '2023-07-07 12:05:01',
                'deleted_at' => null,
            ],
            56 => [

                'title' => 'position_edit',
                'created_at' => '2023-07-07 12:05:08',
                'updated_at' => '2023-07-07 12:05:08',
                'deleted_at' => null,
            ],
            57 => [

                'title' => 'position_show',
                'created_at' => '2023-07-07 12:05:14',
                'updated_at' => '2023-07-07 12:05:14',
                'deleted_at' => null,
            ],
            58 => [

                'title' => 'position_delete',
                'created_at' => '2023-07-07 12:05:21',
                'updated_at' => '2023-07-07 12:05:21',
                'deleted_at' => null,
            ],
            59 => [

                'title' => 'setting_management_access',
                'created_at' => '2023-07-07 12:05:27',
                'updated_at' => '2023-07-07 12:05:27',
                'deleted_at' => null,
            ],
            60 => [

                'title' => 'country_access',
                'created_at' => '2023-07-07 12:05:36',
                'updated_at' => '2023-07-07 12:05:36',
                'deleted_at' => null,
            ],
            61 => [

                'title' => 'country_create',
                'created_at' => '2023-07-07 12:05:44',
                'updated_at' => '2023-07-07 12:05:44',
                'deleted_at' => null,
            ],
            62 => [

                'title' => 'country_edit',
                'created_at' => '2023-07-07 12:05:51',
                'updated_at' => '2023-07-07 12:05:51',
                'deleted_at' => null,
            ],
            63 => [

                'title' => 'country_show',
                'created_at' => '2023-07-07 12:05:58',
                'updated_at' => '2023-07-07 12:05:58',
                'deleted_at' => null,
            ],
            64 => [

                'title' => 'country_delete',
                'created_at' => '2023-07-07 12:06:08',
                'updated_at' => '2023-07-07 12:06:08',
                'deleted_at' => null,
            ],
            65 => [

                'title' => 'gender_access',
                'created_at' => '2023-07-07 12:06:27',
                'updated_at' => '2023-07-07 12:06:27',
                'deleted_at' => null,
            ],
            66 => [

                'title' => 'gender_create',
                'created_at' => '2023-07-07 12:06:33',
                'updated_at' => '2023-07-07 12:06:33',
                'deleted_at' => null,
            ],
            67 => [

                'title' => 'gender_edit',
                'created_at' => '2023-07-07 12:06:40',
                'updated_at' => '2023-07-07 12:06:40',
                'deleted_at' => null,
            ],
            68 => [

                'title' => 'gender_show',
                'created_at' => '2023-07-07 12:06:47',
                'updated_at' => '2023-07-07 12:06:47',
                'deleted_at' => null,
            ],
            69 => [

                'title' => 'gender_delete',
                'created_at' => '2023-07-07 12:06:55',
                'updated_at' => '2023-07-07 12:06:55',
                'deleted_at' => null,
            ],
            70 => [

                'title' => 'mediaType_access',
                'created_at' => '2023-07-07 12:07:06',
                'updated_at' => '2023-07-07 12:07:06',
                'deleted_at' => null,
            ],
            71 => [

                'title' => 'mediaType_create',
                'created_at' => '2023-07-07 12:07:14',
                'updated_at' => '2023-07-07 12:07:14',
                'deleted_at' => null,
            ],
            72 => [

                'title' => 'mediaType_edit',
                'created_at' => '2023-07-07 12:07:22',
                'updated_at' => '2023-07-07 12:07:22',
                'deleted_at' => null,
            ],
            73 => [

                'title' => 'mediaType_show',
                'created_at' => '2023-07-07 12:07:28',
                'updated_at' => '2023-07-07 12:07:28',
                'deleted_at' => null,
            ],
            74 => [

                'title' => 'mediaType_delete',
                'created_at' => '2023-07-07 12:07:34',
                'updated_at' => '2023-07-07 12:07:34',
                'deleted_at' => null,
            ],
            75 => [

                'title' => 'qualification_access',
                'created_at' => '2023-07-07 12:07:43',
                'updated_at' => '2023-07-07 12:07:43',
                'deleted_at' => null,
            ],
            76 => [

                'title' => 'qualification_create',
                'created_at' => '2023-07-07 12:07:50',
                'updated_at' => '2023-07-07 12:07:50',
                'deleted_at' => null,
            ],
            77 => [

                'title' => 'qualification_edit',
                'created_at' => '2023-07-07 12:07:57',
                'updated_at' => '2023-07-07 12:07:57',
                'deleted_at' => null,
            ],
            78 => [

                'title' => 'qualification_show',
                'created_at' => '2023-07-07 12:08:03',
                'updated_at' => '2023-07-07 12:08:03',
                'deleted_at' => null,
            ],
            79 => [

                'title' => 'qualification_delete',
                'created_at' => '2023-07-07 12:08:10',
                'updated_at' => '2023-07-07 12:08:10',
                'deleted_at' => null,
            ],
            80 => [

                'title' => 'university_access',
                'created_at' => '2023-07-07 12:08:17',
                'updated_at' => '2023-07-07 12:08:17',
                'deleted_at' => null,
            ],
            81 => [

                'title' => 'university_create',
                'created_at' => '2023-07-07 12:08:23',
                'updated_at' => '2023-07-07 12:08:23',
                'deleted_at' => null,
            ],
            82 => [

                'title' => 'university_edit',
                'created_at' => '2023-07-07 12:08:31',
                'updated_at' => '2023-07-07 12:08:31',
                'deleted_at' => null,
            ],
            83 => [

                'title' => 'university_show',
                'created_at' => '2023-07-07 12:08:38',
                'updated_at' => '2023-07-07 12:08:38',
                'deleted_at' => null,
            ],
            84 => [

                'title' => 'university_delete',
                'created_at' => '2023-07-07 12:08:46',
                'updated_at' => '2023-07-07 12:08:46',
                'deleted_at' => null,
            ],
            85 => [

                'title' => 'division_access',
                'created_at' => '2023-07-07 12:08:58',
                'updated_at' => '2023-07-07 12:08:58',
                'deleted_at' => null,
            ],
            86 => [

                'title' => 'division_create',
                'created_at' => '2023-07-07 12:09:04',
                'updated_at' => '2023-07-07 12:09:04',
                'deleted_at' => null,
            ],
            87 => [

                'title' => 'division_edit',
                'created_at' => '2023-07-07 12:09:11',
                'updated_at' => '2023-07-07 12:09:11',
                'deleted_at' => null,
            ],
            88 => [

                'title' => 'division_show',
                'created_at' => '2023-07-07 12:09:18',
                'updated_at' => '2023-07-07 12:09:18',
                'deleted_at' => null,
            ],
            89 => [

                'title' => 'division_delete',
                'created_at' => '2023-07-07 12:09:26',
                'updated_at' => '2023-07-07 12:09:26',
                'deleted_at' => null,
            ],
            90 => [

                'title' => 'recruitmentType_access',
                'created_at' => '2023-07-07 12:09:33',
                'updated_at' => '2023-07-07 12:09:33',
                'deleted_at' => null,
            ],
            91 => [

                'title' => 'recruitmentType_create',
                'created_at' => '2023-07-07 12:09:40',
                'updated_at' => '2023-07-07 12:09:40',
                'deleted_at' => null,
            ],
            92 => [

                'title' => 'recruitmentType_edit',
                'created_at' => '2023-07-07 12:09:47',
                'updated_at' => '2023-07-07 12:09:47',
                'deleted_at' => null,
            ],
            93 => [

                'title' => 'recruitmentType_show',
                'created_at' => '2023-07-07 12:09:54',
                'updated_at' => '2023-07-07 12:09:54',
                'deleted_at' => null,
            ],
            94 => [

                'title' => 'recruitmentType_delete',
                'created_at' => '2023-07-07 12:10:02',
                'updated_at' => '2023-07-07 12:10:02',
                'deleted_at' => null,
            ],
            95 => [

                'title' => 'designation_access',
                'created_at' => '2023-07-07 12:10:12',
                'updated_at' => '2023-07-07 12:10:12',
                'deleted_at' => null,
            ],
            96 => [

                'title' => 'designation_create',
                'created_at' => '2023-07-07 12:10:18',
                'updated_at' => '2023-07-07 12:10:18',
                'deleted_at' => null,
            ],
            97 => [

                'title' => 'designation_edit',
                'created_at' => '2023-07-07 12:10:25',
                'updated_at' => '2023-07-07 12:10:25',
                'deleted_at' => null,
            ],
            98 => [

                'title' => 'designation_show',
                'created_at' => '2023-07-07 12:10:32',
                'updated_at' => '2023-07-07 12:10:32',
                'deleted_at' => null,
            ],
            99 => [

                'title' => 'designation_delete',
                'created_at' => '2023-07-07 12:10:39',
                'updated_at' => '2023-07-07 12:10:39',
                'deleted_at' => null,
            ],
            100 => [

                'title' => 'applicationFee_access',
                'created_at' => '2023-07-07 12:10:48',
                'updated_at' => '2023-07-07 12:10:48',
                'deleted_at' => null,
            ],
            101 => [

                'title' => 'applicationFee_create',
                'created_at' => '2023-07-07 12:10:54',
                'updated_at' => '2023-07-07 12:10:54',
                'deleted_at' => null,
            ],
            102 => [

                'title' => 'applicationFee_edit',
                'created_at' => '2023-07-07 12:11:01',
                'updated_at' => '2023-07-07 12:11:01',
                'deleted_at' => null,
            ],
            103 => [

                'title' => 'applicationFee_show',
                'created_at' => '2023-07-07 12:11:07',
                'updated_at' => '2023-07-07 12:11:07',
                'deleted_at' => null,
            ],
            104 => [

                'title' => 'applicationFee_delete',
                'created_at' => '2023-07-07 12:11:16',
                'updated_at' => '2023-07-07 12:11:16',
                'deleted_at' => null,
            ],
            105 => [

                'title' => 'samabeshiGroup_access',
                'created_at' => '2023-07-07 12:11:25',
                'updated_at' => '2023-07-07 12:11:25',
                'deleted_at' => null,
            ],
            106 => [

                'title' => 'samabeshiGroup_create',
                'created_at' => '2023-07-07 12:11:31',
                'updated_at' => '2023-07-07 12:11:31',
                'deleted_at' => null,
            ],
            107 => [

                'title' => 'samabeshiGroup_edit',
                'created_at' => '2023-07-07 12:11:38',
                'updated_at' => '2023-07-07 12:11:38',
                'deleted_at' => null,
            ],
            108 => [

                'title' => 'samabeshiGroup_show',
                'created_at' => '2023-07-07 12:11:45',
                'updated_at' => '2023-07-07 12:11:45',
                'deleted_at' => null,
            ],
            109 => [

                'title' => 'samabeshiGroup_delete',
                'created_at' => '2023-07-07 12:11:51',
                'updated_at' => '2023-07-07 12:11:51',
                'deleted_at' => null,
            ],
            110 => [

                'title' => 'examCenter_access',
                'created_at' => '2023-07-07 12:11:58',
                'updated_at' => '2023-07-07 12:11:58',
                'deleted_at' => null,
            ],
            111 => [

                'title' => 'examCenter_create',
                'created_at' => '2023-07-07 12:12:04',
                'updated_at' => '2023-07-07 12:12:04',
                'deleted_at' => null,
            ],
            112 => [

                'title' => 'examCenter_edit',
                'created_at' => '2023-07-07 12:12:11',
                'updated_at' => '2023-07-07 12:12:11',
                'deleted_at' => null,
            ],
            113 => [

                'title' => 'examCenter_show',
                'created_at' => '2023-07-07 12:12:18',
                'updated_at' => '2023-07-07 12:12:18',
                'deleted_at' => null,
            ],
            114 => [

                'title' => 'examCenter_delete',
                'created_at' => '2023-07-07 12:12:25',
                'updated_at' => '2023-07-07 12:12:25',
                'deleted_at' => null,
            ],
            115 => [

                'title' => 'menu_access',
                'created_at' => '2023-07-07 12:12:36',
                'updated_at' => '2023-07-07 12:12:36',
                'deleted_at' => null,
            ],
            116 => [

                'title' => 'advertisement_access',
                'created_at' => '2023-07-07 12:13:10',
                'updated_at' => '2023-07-07 12:13:10',
                'deleted_at' => null,
            ],
            117 => [

                'title' => 'advertisement_create',
                'created_at' => '2023-07-07 12:13:16',
                'updated_at' => '2023-07-07 12:13:16',
                'deleted_at' => null,
            ],
            118 => [

                'title' => 'advertisement_edit',
                'created_at' => '2023-07-07 12:13:24',
                'updated_at' => '2023-07-07 12:13:24',
                'deleted_at' => null,
            ],
            119 => [

                'title' => 'advertisement_show',
                'created_at' => '2023-07-07 12:13:31',
                'updated_at' => '2023-07-07 12:13:31',
                'deleted_at' => null,
            ],
            120 => [

                'title' => 'advertisement_delete',
                'created_at' => '2023-07-07 12:13:38',
                'updated_at' => '2023-07-07 12:13:38',
                'deleted_at' => null,
            ],
            121 => [

                'title' => 'application_access',
                'created_at' => '2023-07-07 12:13:46',
                'updated_at' => '2023-07-07 12:13:46',
                'deleted_at' => null,
            ],
        ]);
    }
}
