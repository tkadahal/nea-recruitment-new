<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitiesTableSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('municipalities')->delete();

        DB::table('municipalities')->insert([
            0 => [

                'district_id' => 1,
                'title' => 'Arun Rural Municipality',

                'created_at' => '2023-05-08 15:53:20',
                'updated_at' => '2023-05-08 15:53:20',
                'deleted_at' => null,
            ],
            1 => [

                'district_id' => 1,
                'title' => 'Aamchowk Rural Municipality',

                'created_at' => '2023-05-08 15:53:30',
                'updated_at' => '2023-05-08 15:53:30',
                'deleted_at' => null,
            ],
            2 => [

                'district_id' => 1,
                'title' => 'Hatuwagadhi Rural Municipality',

                'created_at' => '2023-05-08 15:53:39',
                'updated_at' => '2023-05-08 15:53:39',
                'deleted_at' => null,
            ],
            3 => [

                'district_id' => 1,
                'title' => 'Pauwadungma Rural Municipality',

                'created_at' => '2023-05-08 15:53:48',
                'updated_at' => '2023-05-08 15:53:48',
                'deleted_at' => null,
            ],
            4 => [

                'district_id' => 1,
                'title' => 'Temkemaiyung Rural Municipality',

                'created_at' => '2023-05-08 15:53:58',
                'updated_at' => '2023-05-08 15:53:58',
                'deleted_at' => null,
            ],
            5 => [

                'district_id' => 1,
                'title' => 'Salpasilichho Rural Municipality',

                'created_at' => '2023-05-08 15:54:06',
                'updated_at' => '2023-05-08 15:54:06',
                'deleted_at' => null,
            ],
            6 => [

                'district_id' => 1,
                'title' => 'Ramprasad Rai Rural Municipality',

                'created_at' => '2023-05-08 15:54:14',
                'updated_at' => '2023-05-08 15:54:14',
                'deleted_at' => null,
            ],
            7 => [

                'district_id' => 1,
                'title' => 'Shadananda Municipality',

                'created_at' => '2023-05-08 15:54:23',
                'updated_at' => '2023-05-08 15:54:23',
                'deleted_at' => null,
            ],
            8 => [

                'district_id' => 1,
                'title' => 'Bhojpur Municipality',

                'created_at' => '2023-05-08 15:54:31',
                'updated_at' => '2023-05-08 15:54:31',
                'deleted_at' => null,
            ],
            9 => [

                'district_id' => 2,
                'title' => 'Chaubise Rural Municipality',

                'created_at' => '2023-05-08 15:54:58',
                'updated_at' => '2023-05-08 15:54:58',
                'deleted_at' => null,
            ],
            10 => [

                'district_id' => 2,
                'title' => 'Shahidbhumi Rural Municipality',

                'created_at' => '2023-05-08 15:55:08',
                'updated_at' => '2023-05-08 15:55:08',
                'deleted_at' => null,
            ],
            11 => [

                'district_id' => 2,
                'title' => 'Sangurigadhi Rural Municipality',

                'created_at' => '2023-05-08 15:55:16',
                'updated_at' => '2023-05-08 15:55:16',
                'deleted_at' => null,
            ],
            12 => [

                'district_id' => 2,
                'title' => 'Chhathar Jorpati Rural Municipality',

                'created_at' => '2023-05-08 15:55:27',
                'updated_at' => '2023-05-08 15:55:27',
                'deleted_at' => null,
            ],
            13 => [

                'district_id' => 2,
                'title' => 'Pakhribas Municipality',

                'created_at' => '2023-05-08 15:55:36',
                'updated_at' => '2023-05-08 15:55:36',
                'deleted_at' => null,
            ],
            14 => [

                'district_id' => 2,
                'title' => 'Mahalaxmi Municipality',

                'created_at' => '2023-05-08 15:55:44',
                'updated_at' => '2023-05-08 15:55:44',
                'deleted_at' => null,
            ],
            15 => [

                'district_id' => 2,
                'title' => 'Dhankuta Municipality',

                'created_at' => '2023-05-08 15:55:54',
                'updated_at' => '2023-05-08 15:55:54',
                'deleted_at' => null,
            ],
            16 => [

                'district_id' => 3,
                'title' => 'Rong Rural Municipality',

                'created_at' => '2023-05-08 15:56:09',
                'updated_at' => '2023-05-08 15:56:09',
                'deleted_at' => null,
            ],
            17 => [

                'district_id' => 3,
                'title' => 'Mangsebung Rural Municipality',

                'created_at' => '2023-05-08 15:56:17',
                'updated_at' => '2023-05-08 15:56:17',
                'deleted_at' => null,
            ],
            18 => [

                'district_id' => 3,
                'title' => 'Chulachuli Rural Municipality',

                'created_at' => '2023-05-08 15:56:26',
                'updated_at' => '2023-05-08 15:56:26',
                'deleted_at' => null,
            ],
            19 => [

                'district_id' => 3,
                'title' => 'Sandakpur Rural Municipality',

                'created_at' => '2023-05-08 15:56:36',
                'updated_at' => '2023-05-08 15:56:36',
                'deleted_at' => null,
            ],
            20 => [

                'district_id' => 3,
                'title' => 'Fakphokthum Rural Municipality',

                'created_at' => '2023-05-08 15:56:46',
                'updated_at' => '2023-05-08 15:56:46',
                'deleted_at' => null,
            ],
            21 => [

                'district_id' => 3,
                'title' => 'Maijogmai Rural Municipality',

                'created_at' => '2023-05-08 15:56:57',
                'updated_at' => '2023-05-08 15:56:57',
                'deleted_at' => null,
            ],
            22 => [

                'district_id' => 3,
                'title' => 'Illam Municipality',

                'created_at' => '2023-05-08 15:57:09',
                'updated_at' => '2023-05-08 15:57:09',
                'deleted_at' => null,
            ],
            23 => [

                'district_id' => 3,
                'title' => 'Mai Municipality',

                'created_at' => '2023-05-08 15:57:19',
                'updated_at' => '2023-05-08 15:57:19',
                'deleted_at' => null,
            ],
            24 => [

                'district_id' => 3,
                'title' => 'Deumai Municipality',

                'created_at' => '2023-05-08 15:57:29',
                'updated_at' => '2023-05-08 15:57:29',
                'deleted_at' => null,
            ],
            25 => [

                'district_id' => 3,
                'title' => 'Suryodaya Municipality',

                'created_at' => '2023-05-08 15:57:38',
                'updated_at' => '2023-05-08 15:57:38',
                'deleted_at' => null,
            ],
            26 => [

                'district_id' => 4,
                'title' => 'Kamal Rural Municipality',

                'created_at' => '2023-05-08 15:58:01',
                'updated_at' => '2023-05-08 15:58:01',
                'deleted_at' => null,
            ],
            27 => [

                'district_id' => 4,
                'title' => 'Jhapa Rural Municipality',

                'created_at' => '2023-05-08 15:58:11',
                'updated_at' => '2023-05-08 15:58:11',
                'deleted_at' => null,
            ],
            28 => [

                'district_id' => 4,
                'title' => 'Kachankawal Rural Municipality',

                'created_at' => '2023-05-08 15:58:19',
                'updated_at' => '2023-05-08 15:58:19',
                'deleted_at' => null,
            ],
            29 => [

                'district_id' => 4,
                'title' => 'Gauriganj Rural Municipality',

                'created_at' => '2023-05-08 15:58:30',
                'updated_at' => '2023-05-08 15:58:30',
                'deleted_at' => null,
            ],
            30 => [

                'district_id' => 4,
                'title' => 'Barhadashi Rural Municipality',

                'created_at' => '2023-05-08 15:58:39',
                'updated_at' => '2023-05-08 15:58:39',
                'deleted_at' => null,
            ],
            31 => [

                'district_id' => 4,
                'title' => 'Haldibari Rural Municipality',

                'created_at' => '2023-05-08 15:58:49',
                'updated_at' => '2023-05-08 15:58:49',
                'deleted_at' => null,
            ],
            32 => [

                'district_id' => 4,
                'title' => 'Buddhashanti Rural Municipality',

                'created_at' => '2023-05-08 15:58:59',
                'updated_at' => '2023-05-08 15:58:59',
                'deleted_at' => null,
            ],
            33 => [

                'district_id' => 4,
                'title' => 'Shivasataxi Municipality',

                'created_at' => '2023-05-08 15:59:08',
                'updated_at' => '2023-05-08 15:59:08',
                'deleted_at' => null,
            ],
            34 => [

                'district_id' => 4,
                'title' => 'Bhadrapur Municipality',

                'created_at' => '2023-05-08 15:59:17',
                'updated_at' => '2023-05-08 15:59:17',
                'deleted_at' => null,
            ],
            35 => [

                'district_id' => 4,
                'title' => 'Kankai Municipality',

                'created_at' => '2023-05-08 15:59:25',
                'updated_at' => '2023-05-08 15:59:25',
                'deleted_at' => null,
            ],
            36 => [

                'district_id' => 4,
                'title' => 'Birtamod Municipality',

                'created_at' => '2023-05-08 15:59:35',
                'updated_at' => '2023-05-08 15:59:35',
                'deleted_at' => null,
            ],
            37 => [

                'district_id' => 4,
                'title' => 'Mechinagar Municipality',

                'created_at' => '2023-05-08 15:59:43',
                'updated_at' => '2023-05-08 15:59:43',
                'deleted_at' => null,
            ],
            38 => [

                'district_id' => 4,
                'title' => 'Damak Municipality',

                'created_at' => '2023-05-08 15:59:52',
                'updated_at' => '2023-05-08 15:59:52',
                'deleted_at' => null,
            ],
            39 => [

                'district_id' => 4,
                'title' => 'Arjundhara Municipality',

                'created_at' => '2023-05-08 16:00:02',
                'updated_at' => '2023-05-08 16:00:02',
                'deleted_at' => null,
            ],
            40 => [

                'district_id' => 4,
                'title' => 'Gauradhaha Municipality',

                'created_at' => '2023-05-08 16:00:11',
                'updated_at' => '2023-05-08 16:00:11',
                'deleted_at' => null,
            ],
            41 => [

                'district_id' => 5,
                'title' => 'Sakela Rural Municipality',

                'created_at' => '2023-05-08 16:00:43',
                'updated_at' => '2023-05-08 16:00:43',
                'deleted_at' => null,
            ],
            42 => [

                'district_id' => 5,
                'title' => 'Khotehang Rural Municipality',

                'created_at' => '2023-05-08 16:00:54',
                'updated_at' => '2023-05-08 16:00:54',
                'deleted_at' => null,
            ],
            43 => [

                'district_id' => 5,
                'title' => 'Barahapokhari Rural Municipality',

                'created_at' => '2023-05-08 16:01:02',
                'updated_at' => '2023-05-08 16:01:02',
                'deleted_at' => null,
            ],
            44 => [

                'district_id' => 5,
                'title' => 'Ainselukhark Rural Municipality',

                'created_at' => '2023-05-08 16:01:11',
                'updated_at' => '2023-05-08 16:01:11',
                'deleted_at' => null,
            ],
            45 => [

                'district_id' => 5,
                'title' => 'Rawa Besi Rural Municipality',

                'created_at' => '2023-05-08 16:01:21',
                'updated_at' => '2023-05-08 16:01:21',
                'deleted_at' => null,
            ],
            46 => [

                'district_id' => 5,
                'title' => 'Kepilasagadhi Rural Municipality',

                'created_at' => '2023-05-08 16:01:31',
                'updated_at' => '2023-05-08 16:01:31',
                'deleted_at' => null,
            ],
            47 => [

                'district_id' => 5,
                'title' => 'Jantedhunga Rural Municipality',

                'created_at' => '2023-05-08 16:01:39',
                'updated_at' => '2023-05-08 16:01:39',
                'deleted_at' => null,
            ],
            48 => [

                'district_id' => 5,
                'title' => 'Diprung Chuichumma Rural Municipality',

                'created_at' => '2023-05-08 16:01:47',
                'updated_at' => '2023-05-08 16:01:47',
                'deleted_at' => null,
            ],
            49 => [

                'district_id' => 5,
                'title' => 'Halesi Tuwachung Municipality',

                'created_at' => '2023-05-08 16:01:55',
                'updated_at' => '2023-05-08 16:01:55',
                'deleted_at' => null,
            ],
            50 => [

                'district_id' => 5,
                'title' => 'Diktel Rupakot Majhuwagadhi Municipality',

                'created_at' => '2023-05-08 16:02:06',
                'updated_at' => '2023-05-08 16:02:06',
                'deleted_at' => null,
            ],
            51 => [

                'district_id' => 6,
                'title' => 'Jahada Rural Municipality',

                'created_at' => '2023-05-08 16:02:32',
                'updated_at' => '2023-05-08 16:02:32',
                'deleted_at' => null,
            ],
            52 => [

                'district_id' => 6,
                'title' => 'Katahari Rural Municipality',

                'created_at' => '2023-05-08 16:02:44',
                'updated_at' => '2023-05-08 16:02:44',
                'deleted_at' => null,
            ],
            53 => [

                'district_id' => 6,
                'title' => 'Gramthan Rural Municipality',

                'created_at' => '2023-05-08 16:02:55',
                'updated_at' => '2023-05-08 16:02:55',
                'deleted_at' => null,
            ],
            54 => [

                'district_id' => 6,
                'title' => 'Dhanpalthan Rural Municipality',

                'created_at' => '2023-05-08 16:03:08',
                'updated_at' => '2023-05-08 16:03:08',
                'deleted_at' => null,
            ],
            55 => [

                'district_id' => 6,
                'title' => 'Kerabari Rural Municipality',

                'created_at' => '2023-05-08 16:03:19',
                'updated_at' => '2023-05-08 16:03:19',
                'deleted_at' => null,
            ],
            56 => [

                'district_id' => 6,
                'title' => 'Budhiganga Rural Municipality',

                'created_at' => '2023-05-08 16:03:30',
                'updated_at' => '2023-05-08 16:03:30',
                'deleted_at' => null,
            ],
            57 => [

                'district_id' => 6,
                'title' => 'Kanepokhari Rural Municipality',

                'created_at' => '2023-05-08 16:03:40',
                'updated_at' => '2023-05-08 16:03:40',
                'deleted_at' => null,
            ],
            58 => [

                'district_id' => 6,
                'title' => 'Miklajung Rural Municipality',

                'created_at' => '2023-05-08 16:03:52',
                'updated_at' => '2023-05-08 16:03:52',
                'deleted_at' => null,
            ],
            59 => [

                'district_id' => 6,
                'title' => 'Letang Municipality',

                'created_at' => '2023-05-08 16:04:03',
                'updated_at' => '2023-05-08 16:04:03',
                'deleted_at' => null,
            ],
            60 => [

                'district_id' => 6,
                'title' => 'Sunwarshi Municipality',

                'created_at' => '2023-05-08 16:04:13',
                'updated_at' => '2023-05-08 16:04:13',
                'deleted_at' => null,
            ],
            61 => [

                'district_id' => 6,
                'title' => 'Rangeli Municipality',

                'created_at' => '2023-05-08 16:04:24',
                'updated_at' => '2023-05-08 16:04:24',
                'deleted_at' => null,
            ],
            62 => [

                'district_id' => 6,
                'title' => 'Patahrishanishchare Municipality',

                'created_at' => '2023-05-08 16:04:36',
                'updated_at' => '2023-05-08 16:04:36',
                'deleted_at' => null,
            ],
            63 => [

                'district_id' => 6,
                'title' => 'Biratnagar Metropolitian City',

                'created_at' => '2023-05-08 16:04:46',
                'updated_at' => '2023-05-08 16:04:46',
                'deleted_at' => null,
            ],
            64 => [

                'district_id' => 6,
                'title' => 'Uralabari Municipality',

                'created_at' => '2023-05-08 16:04:56',
                'updated_at' => '2023-05-08 16:04:56',
                'deleted_at' => null,
            ],
            65 => [

                'district_id' => 6,
                'title' => 'Belbari Municipality',

                'created_at' => '2023-05-08 16:05:06',
                'updated_at' => '2023-05-08 16:05:06',
                'deleted_at' => null,
            ],
            66 => [

                'district_id' => 6,
                'title' => 'Sundarharaicha Municipality',

                'created_at' => '2023-05-08 16:05:15',
                'updated_at' => '2023-05-08 16:05:15',
                'deleted_at' => null,
            ],
            67 => [

                'district_id' => 6,
                'title' => 'Ratuwamai Municipality',

                'created_at' => '2023-05-08 16:05:25',
                'updated_at' => '2023-05-08 16:05:25',
                'deleted_at' => null,
            ],
            68 => [

                'district_id' => 7,
                'title' => 'Likhu Rural Municipality',

                'created_at' => '2023-05-08 16:05:52',
                'updated_at' => '2023-05-08 16:05:52',
                'deleted_at' => null,
            ],
            69 => [

                'district_id' => 7,
                'title' => 'Molung Rural Municipality',

                'created_at' => '2023-05-08 16:06:05',
                'updated_at' => '2023-05-08 16:06:05',
                'deleted_at' => null,
            ],
            70 => [

                'district_id' => 7,
                'title' => 'Sunkoshi Rural Municipality',

                'created_at' => '2023-05-08 16:06:16',
                'updated_at' => '2023-05-08 16:06:16',
                'deleted_at' => null,
            ],
            71 => [

                'district_id' => 7,
                'title' => 'Champadevi Rural Municipality',

                'created_at' => '2023-05-08 16:06:27',
                'updated_at' => '2023-05-08 16:06:27',
                'deleted_at' => null,
            ],
            72 => [

                'district_id' => 7,
                'title' => 'Chisankhugadhi Rural Municipality',

                'created_at' => '2023-05-08 16:06:37',
                'updated_at' => '2023-05-08 16:06:37',
                'deleted_at' => null,
            ],
            73 => [

                'district_id' => 7,
                'title' => 'Khijidemba Rural Municipality',

                'created_at' => '2023-05-08 16:06:47',
                'updated_at' => '2023-05-08 16:06:47',
                'deleted_at' => null,
            ],
            74 => [

                'district_id' => 7,
                'title' => 'Manebhanjyang Rural Municipality',

                'created_at' => '2023-05-08 16:06:58',
                'updated_at' => '2023-05-08 16:06:58',
                'deleted_at' => null,
            ],
            75 => [

                'district_id' => 7,
                'title' => 'Siddhicharan Municipality',

                'created_at' => '2023-05-08 16:07:08',
                'updated_at' => '2023-05-08 16:07:08',
                'deleted_at' => null,
            ],
            76 => [

                'district_id' => 8,
                'title' => 'Yangwarak Rural Municipality',

                'created_at' => '2023-05-08 16:07:34',
                'updated_at' => '2023-05-08 16:07:34',
                'deleted_at' => null,
            ],
            77 => [

                'district_id' => 8,
                'title' => 'Hilihang Rural Municipality',

                'created_at' => '2023-05-08 16:07:46',
                'updated_at' => '2023-05-08 16:07:46',
                'deleted_at' => null,
            ],
            78 => [

                'district_id' => 8,
                'title' => 'Falelung Rural Municipality',

                'created_at' => '2023-05-08 16:07:57',
                'updated_at' => '2023-05-08 16:07:57',
                'deleted_at' => null,
            ],
            79 => [

                'district_id' => 8,
                'title' => 'Tumbewa Rural Municipality',

                'created_at' => '2023-05-08 16:08:09',
                'updated_at' => '2023-05-08 16:08:09',
                'deleted_at' => null,
            ],
            80 => [

                'district_id' => 8,
                'title' => 'Kummayak Rural Municipality',

                'created_at' => '2023-05-08 16:08:20',
                'updated_at' => '2023-05-08 16:08:20',
                'deleted_at' => null,
            ],
            81 => [

                'district_id' => 8,
                'title' => 'Miklajung Rural Municipality',

                'created_at' => '2023-05-08 16:08:32',
                'updated_at' => '2023-05-08 16:08:32',
                'deleted_at' => null,
            ],
            82 => [

                'district_id' => 8,
                'title' => 'Falgunanda Rural Municipality',

                'created_at' => '2023-05-08 16:08:42',
                'updated_at' => '2023-05-08 16:08:42',
                'deleted_at' => null,
            ],
            83 => [

                'district_id' => 8,
                'title' => 'Phidim Municipality',

                'created_at' => '2023-05-08 16:08:55',
                'updated_at' => '2023-05-08 16:08:55',
                'deleted_at' => null,
            ],
            84 => [

                'district_id' => 9,
                'title' => 'Makalu Rural Municipality',

                'created_at' => '2023-05-08 16:09:30',
                'updated_at' => '2023-05-08 16:09:30',
                'deleted_at' => null,
            ],
            85 => [

                'district_id' => 9,
                'title' => 'Chichila Rural Municipality',

                'created_at' => '2023-05-08 16:09:41',
                'updated_at' => '2023-05-08 16:09:41',
                'deleted_at' => null,
            ],
            86 => [

                'district_id' => 9,
                'title' => 'Silichong Rural Municipality',

                'created_at' => '2023-05-08 16:09:52',
                'updated_at' => '2023-05-08 16:09:52',
                'deleted_at' => null,
            ],
            87 => [

                'district_id' => 9,
                'title' => 'Bhotkhola Rural Municipality',

                'created_at' => '2023-05-08 16:10:02',
                'updated_at' => '2023-05-08 16:10:02',
                'deleted_at' => null,
            ],
            88 => [

                'district_id' => 9,
                'title' => 'Sabhapokhari Rural Municipality',

                'created_at' => '2023-05-08 16:10:11',
                'updated_at' => '2023-05-08 16:10:11',
                'deleted_at' => null,
            ],
            89 => [

                'district_id' => 9,
                'title' => 'Dharmadevi Municipality',

                'created_at' => '2023-05-08 16:10:21',
                'updated_at' => '2023-05-08 16:10:21',
                'deleted_at' => null,
            ],
            90 => [

                'district_id' => 9,
                'title' => 'Madi Municipality',

                'created_at' => '2023-05-08 16:10:30',
                'updated_at' => '2023-05-08 16:10:30',
                'deleted_at' => null,
            ],
            91 => [

                'district_id' => 9,
                'title' => 'Panchakhapan Municipality',

                'created_at' => '2023-05-08 16:10:39',
                'updated_at' => '2023-05-08 16:10:39',
                'deleted_at' => null,
            ],
            92 => [

                'district_id' => 9,
                'title' => 'Chainpur Municipality',

                'created_at' => '2023-05-08 16:10:48',
                'updated_at' => '2023-05-08 16:10:48',
                'deleted_at' => null,
            ],
            93 => [

                'district_id' => 9,
                'title' => 'Khandbari Municipality',

                'created_at' => '2023-05-08 16:10:59',
                'updated_at' => '2023-05-08 16:10:59',
                'deleted_at' => null,
            ],
            94 => [

                'district_id' => 10,
                'title' => 'Sotang Rural Municipality',

                'created_at' => '2023-05-08 16:13:19',
                'updated_at' => '2023-05-08 16:13:19',
                'deleted_at' => null,
            ],
            95 => [

                'district_id' => 10,
                'title' => 'Mahakulung Rural Municipality',

                'created_at' => '2023-05-08 16:13:31',
                'updated_at' => '2023-05-08 16:13:31',
                'deleted_at' => null,
            ],
            96 => [

                'district_id' => 10,
                'title' => 'Likhupike Rural Municipality',

                'created_at' => '2023-05-08 16:13:47',
                'updated_at' => '2023-05-08 16:13:47',
                'deleted_at' => null,
            ],
            97 => [

                'district_id' => 10,
                'title' => 'Nechasalyan Rural Municipality',

                'created_at' => '2023-05-08 16:14:01',
                'updated_at' => '2023-05-08 16:14:01',
                'deleted_at' => null,
            ],
            98 => [

                'district_id' => 10,
                'title' => 'Thulung Dudhkoshi Rural Municipality',

                'created_at' => '2023-05-08 16:14:13',
                'updated_at' => '2023-05-08 16:14:13',
                'deleted_at' => null,
            ],
            99 => [

                'district_id' => 10,
                'title' => 'Maapya Dudhkoshi Rural Municipality',

                'created_at' => '2023-05-08 16:14:25',
                'updated_at' => '2023-05-08 16:14:25',
                'deleted_at' => null,
            ],
            100 => [

                'district_id' => 10,
                'title' => 'Khumbupasanglahmu Rural Municipality',

                'created_at' => '2023-05-08 16:14:38',
                'updated_at' => '2023-05-08 16:14:38',
                'deleted_at' => null,
            ],
            101 => [

                'district_id' => 10,
                'title' => 'Solududhakunda Municipality',

                'created_at' => '2023-05-08 16:14:49',
                'updated_at' => '2023-05-08 16:14:49',
                'deleted_at' => null,
            ],
            102 => [

                'district_id' => 11,
                'title' => 'Gadhi Rural Municipality',

                'created_at' => '2023-05-08 16:15:19',
                'updated_at' => '2023-05-08 16:15:19',
                'deleted_at' => null,
            ],
            103 => [

                'district_id' => 11,
                'title' => 'Koshi Rural Municipality',

                'created_at' => '2023-05-08 16:15:31',
                'updated_at' => '2023-05-08 16:15:31',
                'deleted_at' => null,
            ],
            104 => [

                'district_id' => 11,
                'title' => 'Barju Rural Municipality',

                'created_at' => '2023-05-08 16:15:45',
                'updated_at' => '2023-05-08 16:15:45',
                'deleted_at' => null,
            ],
            105 => [

                'district_id' => 11,
                'title' => 'Harinagar Rural Municipality',

                'created_at' => '2023-05-08 16:15:58',
                'updated_at' => '2023-05-08 16:15:58',
                'deleted_at' => null,
            ],
            106 => [

                'district_id' => 11,
                'title' => 'Dewanganj Rural Municipality',

                'created_at' => '2023-05-08 16:16:09',
                'updated_at' => '2023-05-08 16:16:09',
                'deleted_at' => null,
            ],
            107 => [

                'district_id' => 11,
                'title' => 'Bhokraha Narsing Rural Municipality',

                'created_at' => '2023-05-08 16:16:21',
                'updated_at' => '2023-05-08 16:16:21',
                'deleted_at' => null,
            ],
            108 => [

                'district_id' => 11,
                'title' => 'Ramdhuni Municipality',

                'created_at' => '2023-05-08 16:16:31',
                'updated_at' => '2023-05-08 16:16:31',
                'deleted_at' => null,
            ],
            109 => [

                'district_id' => 11,
                'title' => 'Barahchhetra Municipality',

                'created_at' => '2023-05-08 16:16:45',
                'updated_at' => '2023-05-08 16:16:45',
                'deleted_at' => null,
            ],
            110 => [

                'district_id' => 11,
                'title' => 'Duhabi Municipality',

                'created_at' => '2023-05-08 16:16:55',
                'updated_at' => '2023-05-08 16:16:55',
                'deleted_at' => null,
            ],
            111 => [

                'district_id' => 11,
                'title' => 'Inaruwa Municipality',

                'created_at' => '2023-05-08 16:17:11',
                'updated_at' => '2023-05-08 16:17:11',
                'deleted_at' => null,
            ],
            112 => [

                'district_id' => 11,
                'title' => 'Dharan Sub-Metropolitian City',

                'created_at' => '2023-05-08 16:17:22',
                'updated_at' => '2023-05-08 16:17:22',
                'deleted_at' => null,
            ],
            113 => [

                'district_id' => 11,
                'title' => 'Itahari Sub-Metropolitian City',

                'created_at' => '2023-05-08 16:17:35',
                'updated_at' => '2023-05-08 16:17:35',
                'deleted_at' => null,
            ],
            114 => [

                'district_id' => 12,
                'title' => 'Sidingba Rural Municipality',

                'created_at' => '2023-05-08 16:19:34',
                'updated_at' => '2023-05-08 16:19:34',
                'deleted_at' => null,
            ],
            115 => [

                'district_id' => 12,
                'title' => 'Meringden Rural Municipality',

                'created_at' => '2023-05-08 16:19:48',
                'updated_at' => '2023-05-08 16:19:48',
                'deleted_at' => null,
            ],
            116 => [

                'district_id' => 12,
                'title' => 'Maiwakhola Rural Municipality',

                'created_at' => '2023-05-08 16:20:00',
                'updated_at' => '2023-05-08 16:20:00',
                'deleted_at' => null,
            ],
            117 => [

                'district_id' => 12,
                'title' => 'Phaktanglung Rural Municipality',

                'created_at' => '2023-05-08 16:20:11',
                'updated_at' => '2023-05-08 16:20:11',
                'deleted_at' => null,
            ],
            118 => [

                'district_id' => 12,
                'title' => 'Sirijangha Rural Municipality',

                'created_at' => '2023-05-08 16:20:22',
                'updated_at' => '2023-05-08 16:20:22',
                'deleted_at' => null,
            ],
            119 => [

                'district_id' => 12,
                'title' => 'Mikwakhola Rural Municipality',

                'created_at' => '2023-05-08 16:20:32',
                'updated_at' => '2023-05-08 16:20:32',
                'deleted_at' => null,
            ],
            120 => [

                'district_id' => 12,
                'title' => 'Aathrai Tribeni Rural Municipality',

                'created_at' => '2023-05-08 16:20:44',
                'updated_at' => '2023-05-08 16:20:44',
                'deleted_at' => null,
            ],
            121 => [

                'district_id' => 12,
                'title' => 'Pathivara Yangwarak Rural Municipality',

                'created_at' => '2023-05-08 16:20:56',
                'updated_at' => '2023-05-08 16:20:56',
                'deleted_at' => null,
            ],
            122 => [

                'district_id' => 12,
                'title' => 'Phungling Municipality',

                'created_at' => '2023-05-08 16:21:06',
                'updated_at' => '2023-05-08 16:21:06',
                'deleted_at' => null,
            ],
            123 => [

                'district_id' => 13,
                'title' => 'Chhathar Rural Municipality',

                'created_at' => '2023-05-08 16:21:51',
                'updated_at' => '2023-05-08 16:21:51',
                'deleted_at' => null,
            ],
            124 => [

                'district_id' => 13,
                'title' => 'Phedap Rural Municipality',

                'created_at' => '2023-05-08 16:28:24',
                'updated_at' => '2023-05-08 16:28:24',
                'deleted_at' => null,
            ],
            125 => [

                'district_id' => 13,
                'title' => 'Aathrai Rural Municipality',

                'created_at' => '2023-05-08 16:28:38',
                'updated_at' => '2023-05-08 16:28:38',
                'deleted_at' => null,
            ],
            126 => [

                'district_id' => 13,
                'title' => 'Menchayam Rural Municipality',

                'created_at' => '2023-05-08 16:28:49',
                'updated_at' => '2023-05-08 16:28:49',
                'deleted_at' => null,
            ],
            127 => [

                'district_id' => 13,
                'title' => 'Laligurans Municipality',

                'created_at' => '2023-05-08 16:29:00',
                'updated_at' => '2023-05-08 16:29:00',
                'deleted_at' => null,
            ],
            128 => [

                'district_id' => 13,
                'title' => 'Myanglung Municipality',

                'created_at' => '2023-05-08 16:29:11',
                'updated_at' => '2023-05-08 16:29:11',
                'deleted_at' => null,
            ],
            129 => [

                'district_id' => 14,
                'title' => 'Tapli Rural Municipality',

                'created_at' => '2023-05-08 16:29:39',
                'updated_at' => '2023-05-08 16:29:39',
                'deleted_at' => null,
            ],
            130 => [

                'district_id' => 14,
                'title' => 'Rautamai Rural Municipality',

                'created_at' => '2023-05-08 16:29:50',
                'updated_at' => '2023-05-08 16:29:50',
                'deleted_at' => null,
            ],
            131 => [

                'district_id' => 14,
                'title' => 'Udayapurgadhi Rural Municipality',

                'created_at' => '2023-05-08 16:30:00',
                'updated_at' => '2023-05-08 16:30:00',
                'deleted_at' => null,
            ],
            132 => [

                'district_id' => 14,
                'title' => 'Limchungbung Rural Municipality',

                'created_at' => '2023-05-08 16:30:10',
                'updated_at' => '2023-05-08 16:30:10',
                'deleted_at' => null,
            ],
            133 => [

                'district_id' => 14,
                'title' => 'Chaudandigadhi Municipality',

                'created_at' => '2023-05-08 16:30:22',
                'updated_at' => '2023-05-08 16:30:22',
                'deleted_at' => null,
            ],
            134 => [

                'district_id' => 14,
                'title' => 'Triyuga Municipality',

                'created_at' => '2023-05-08 16:30:34',
                'updated_at' => '2023-05-08 16:30:34',
                'deleted_at' => null,
            ],
            135 => [

                'district_id' => 14,
                'title' => 'Katari Municipality',

                'created_at' => '2023-05-08 16:30:46',
                'updated_at' => '2023-05-08 16:30:46',
                'deleted_at' => null,
            ],
            136 => [

                'district_id' => 14,
                'title' => 'Belaka Municipality',

                'created_at' => '2023-05-08 16:30:58',
                'updated_at' => '2023-05-08 16:30:58',
                'deleted_at' => null,
            ],
            137 => [

                'district_id' => 22,
                'title' => 'Rajgadh Rural Municipality',

                'created_at' => '2023-05-08 16:32:05',
                'updated_at' => '2023-05-08 16:32:05',
                'deleted_at' => null,
            ],
            138 => [

                'district_id' => 22,
                'title' => 'Rupani Rural Municipality',

                'created_at' => '2023-05-08 16:32:16',
                'updated_at' => '2023-05-08 16:32:16',
                'deleted_at' => null,
            ],
            139 => [

                'district_id' => 22,
                'title' => 'Tirahut Rural Municipality',

                'created_at' => '2023-05-08 16:32:27',
                'updated_at' => '2023-05-08 16:32:27',
                'deleted_at' => null,
            ],
            140 => [

                'district_id' => 22,
                'title' => 'Mahadeva Rural Municipality',

                'created_at' => '2023-05-08 16:32:37',
                'updated_at' => '2023-05-08 16:32:37',
                'deleted_at' => null,
            ],
            141 => [

                'district_id' => 22,
                'title' => 'Bishnupur Rural Municipality',

                'created_at' => '2023-05-08 16:32:49',
                'updated_at' => '2023-05-08 16:32:49',
                'deleted_at' => null,
            ],
            142 => [

                'district_id' => 22,
                'title' => 'Chhinnamasta Rural Municipality',

                'created_at' => '2023-05-08 16:33:01',
                'updated_at' => '2023-05-08 16:33:01',
                'deleted_at' => null,
            ],
            143 => [

                'district_id' => 22,
                'title' => 'Balan Bihul Rural Municipality',

                'created_at' => '2023-05-08 16:33:13',
                'updated_at' => '2023-05-08 16:33:13',
                'deleted_at' => null,
            ],
            144 => [

                'district_id' => 22,
                'title' => 'Tilathi Koiladi Rural Municipality',

                'created_at' => '2023-05-08 16:33:23',
                'updated_at' => '2023-05-08 16:33:23',
                'deleted_at' => null,
            ],
            145 => [

                'district_id' => 22,
                'title' => 'Agnisair Krishna Savaran Rural Municipality',

                'created_at' => '2023-05-08 16:33:35',
                'updated_at' => '2023-05-08 16:33:35',
                'deleted_at' => null,
            ],
            146 => [

                'district_id' => 22,
                'title' => 'Hanumannagar Kankalini Municipality',

                'created_at' => '2023-05-08 16:33:47',
                'updated_at' => '2023-05-08 16:33:47',
                'deleted_at' => null,
            ],
            147 => [

                'district_id' => 22,
                'title' => 'Kanchanrup Municipality',

                'created_at' => '2023-05-08 16:33:56',
                'updated_at' => '2023-05-08 16:33:56',
                'deleted_at' => null,
            ],
            148 => [

                'district_id' => 22,
                'title' => 'Rajbiraj Municipality',

                'created_at' => '2023-05-08 16:34:06',
                'updated_at' => '2023-05-08 16:34:06',
                'deleted_at' => null,
            ],
            149 => [

                'district_id' => 22,
                'title' => 'Khadak Municipality',

                'created_at' => '2023-05-08 16:34:17',
                'updated_at' => '2023-05-08 16:34:17',
                'deleted_at' => null,
            ],
            150 => [

                'district_id' => 22,
                'title' => 'Dakneshwori Municipality',

                'created_at' => '2023-05-08 16:34:27',
                'updated_at' => '2023-05-08 16:34:27',
                'deleted_at' => null,
            ],
            151 => [

                'district_id' => 22,
                'title' => 'Saptakoshi Rural Municipality',

                'created_at' => '2023-05-08 16:34:37',
                'updated_at' => '2023-05-08 16:34:37',
                'deleted_at' => null,
            ],
            152 => [

                'district_id' => 22,
                'title' => 'Surunga Municipality',

                'created_at' => '2023-05-08 16:34:47',
                'updated_at' => '2023-05-08 16:34:47',
                'deleted_at' => null,
            ],
            153 => [

                'district_id' => 22,
                'title' => 'Shambhunath Municipality',

                'created_at' => '2023-05-08 16:34:56',
                'updated_at' => '2023-05-08 16:34:56',
                'deleted_at' => null,
            ],
            154 => [

                'district_id' => 22,
                'title' => 'Bode Barsain Municipality',

                'created_at' => '2023-05-08 16:35:05',
                'updated_at' => '2023-05-08 16:35:05',
                'deleted_at' => null,
            ],
            155 => [

                'district_id' => 20,
                'title' => 'Aurahi Rural Municipality',

                'created_at' => '2023-05-08 16:35:41',
                'updated_at' => '2023-05-08 16:35:41',
                'deleted_at' => null,
            ],
            156 => [

                'district_id' => 20,
                'title' => 'Naraha Rural Municipality',

                'created_at' => '2023-05-08 16:35:52',
                'updated_at' => '2023-05-08 16:35:52',
                'deleted_at' => null,
            ],
            157 => [

                'district_id' => 20,
                'title' => 'Arnama Rural Municipality',

                'created_at' => '2023-05-08 16:36:03',
                'updated_at' => '2023-05-08 16:36:37',
                'deleted_at' => null,
            ],
            158 => [

                'district_id' => 20,
                'title' => 'Bhagawanpur Rural Municipality',

                'created_at' => '2023-05-08 16:36:14',
                'updated_at' => '2023-05-08 16:36:14',
                'deleted_at' => null,
            ],
            159 => [

                'district_id' => 20,
                'title' => 'Nawarajpur Rural Municipality',

                'created_at' => '2023-05-08 16:37:01',
                'updated_at' => '2023-05-08 16:37:01',
                'deleted_at' => null,
            ],
            160 => [

                'district_id' => 20,
                'title' => 'Bishnupur Rural Municipality',

                'created_at' => '2023-05-08 16:37:12',
                'updated_at' => '2023-05-08 16:37:12',
                'deleted_at' => null,
            ],
            161 => [

                'district_id' => 20,
                'title' => 'Bariyarpatti Rural Municipality',

                'created_at' => '2023-05-08 16:37:23',
                'updated_at' => '2023-05-08 16:37:23',
                'deleted_at' => null,
            ],
            162 => [

                'district_id' => 20,
                'title' => 'Laxmipur Patari Rural Municipality',

                'created_at' => '2023-05-08 16:37:34',
                'updated_at' => '2023-05-08 16:37:34',
                'deleted_at' => null,
            ],
            163 => [

                'district_id' => 20,
                'title' => 'Sakhuwanankarkatti Rural Municipality',

                'created_at' => '2023-05-08 16:37:49',
                'updated_at' => '2023-05-08 16:37:49',
                'deleted_at' => null,
            ],
            164 => [

                'district_id' => 20,
                'title' => 'Mirchaiya Municipality',

                'created_at' => '2023-05-08 16:38:00',
                'updated_at' => '2023-05-08 16:38:00',
                'deleted_at' => null,
            ],
            165 => [

                'district_id' => 20,
                'title' => 'Lahan Municipality',

                'created_at' => '2023-05-08 16:38:11',
                'updated_at' => '2023-05-08 16:38:11',
                'deleted_at' => null,
            ],
            166 => [

                'district_id' => 20,
                'title' => 'Siraha Municipality',

                'created_at' => '2023-05-08 16:38:26',
                'updated_at' => '2023-05-08 16:38:26',
                'deleted_at' => null,
            ],
            167 => [

                'district_id' => 20,
                'title' => 'Dhangadhimai Municipality',

                'created_at' => '2023-05-08 16:38:36',
                'updated_at' => '2023-05-08 16:38:36',
                'deleted_at' => null,
            ],
            168 => [

                'district_id' => 20,
                'title' => 'Kalyanpur Municipality',

                'created_at' => '2023-05-08 16:38:48',
                'updated_at' => '2023-05-08 16:38:48',
                'deleted_at' => null,
            ],
            169 => [

                'district_id' => 20,
                'title' => 'Karjanha Municipality',

                'created_at' => '2023-05-08 16:39:00',
                'updated_at' => '2023-05-08 16:39:00',
                'deleted_at' => null,
            ],
            170 => [

                'district_id' => 20,
                'title' => 'Golbazar Municipality',

                'created_at' => '2023-05-08 16:39:10',
                'updated_at' => '2023-05-08 16:39:10',
                'deleted_at' => null,
            ],
            171 => [

                'district_id' => 20,
                'title' => 'Sukhipur Municipality',

                'created_at' => '2023-05-08 16:39:23',
                'updated_at' => '2023-05-08 16:39:23',
                'deleted_at' => null,
            ],
            172 => [

                'district_id' => 19,
                'title' => 'Aaurahi Rural Municipality',

                'created_at' => '2023-05-08 16:40:01',
                'updated_at' => '2023-05-08 16:40:01',
                'deleted_at' => null,
            ],
            173 => [

                'district_id' => 19,
                'title' => 'Dhanauji Rural Municipality',

                'created_at' => '2023-05-08 16:40:18',
                'updated_at' => '2023-05-08 16:40:18',
                'deleted_at' => null,
            ],
            174 => [

                'district_id' => 19,
                'title' => 'Bateshwor Rural Municipality',

                'created_at' => '2023-05-08 16:40:33',
                'updated_at' => '2023-05-08 16:40:33',
                'deleted_at' => null,
            ],
            175 => [

                'district_id' => 19,
                'title' => 'Janaknandani Rural Municipality',

                'created_at' => '2023-05-08 16:40:46',
                'updated_at' => '2023-05-08 16:40:46',
                'deleted_at' => null,
            ],
            176 => [

                'district_id' => 19,
                'title' => 'Lakshminiya Rural Municipality',

                'created_at' => '2023-05-08 16:40:59',
                'updated_at' => '2023-05-08 16:40:59',
                'deleted_at' => null,
            ],
            177 => [

                'district_id' => 19,
                'title' => 'Mukhiyapatti Musarmiya Rural Municipality',

                'created_at' => '2023-05-08 16:41:11',
                'updated_at' => '2023-05-08 16:41:11',
                'deleted_at' => null,
            ],
            178 => [

                'district_id' => 19,
                'title' => 'Mithila Bihari Municipality',

                'created_at' => '2023-05-08 16:41:22',
                'updated_at' => '2023-05-08 16:41:22',
                'deleted_at' => null,
            ],
            179 => [

                'district_id' => 19,
                'title' => 'Kamala Municipality',

                'created_at' => '2023-05-08 16:41:34',
                'updated_at' => '2023-05-08 16:41:34',
                'deleted_at' => null,
            ],
            180 => [

                'district_id' => 19,
                'title' => 'Nagarain Municipality',

                'created_at' => '2023-05-08 16:41:43',
                'updated_at' => '2023-05-08 16:41:43',
                'deleted_at' => null,
            ],
            181 => [

                'district_id' => 19,
                'title' => 'Ganeshman Charnath Municipality',

                'created_at' => '2023-05-08 16:41:55',
                'updated_at' => '2023-05-08 16:41:55',
                'deleted_at' => null,
            ],
            182 => [

                'district_id' => 19,
                'title' => 'Mithila Municipality',

                'created_at' => '2023-05-08 16:42:05',
                'updated_at' => '2023-05-08 16:42:05',
                'deleted_at' => null,
            ],
            183 => [

                'district_id' => 19,
                'title' => 'Dhanusadham Municipality',

                'created_at' => '2023-05-08 16:42:15',
                'updated_at' => '2023-05-08 16:42:15',
                'deleted_at' => null,
            ],
            184 => [

                'district_id' => 19,
                'title' => 'Bideha Municipality',

                'created_at' => '2023-05-08 16:42:26',
                'updated_at' => '2023-05-08 16:42:26',
                'deleted_at' => null,
            ],
            185 => [

                'district_id' => 19,
                'title' => 'Sabaila Municipality',

                'created_at' => '2023-05-08 16:42:37',
                'updated_at' => '2023-05-08 16:42:37',
                'deleted_at' => null,
            ],
            186 => [

                'district_id' => 19,
                'title' => 'Hansapur Municipality',

                'created_at' => '2023-05-08 16:42:47',
                'updated_at' => '2023-05-08 16:42:47',
                'deleted_at' => null,
            ],
            187 => [

                'district_id' => 19,
                'title' => 'Janakpurdham Sub-Metropolitian City',

                'created_at' => '2023-05-08 16:42:59',
                'updated_at' => '2023-05-08 16:42:59',
                'deleted_at' => null,
            ],
            188 => [

                'district_id' => 19,
                'title' => 'Sahidnagar Municipality',

                'created_at' => '2023-05-08 16:43:10',
                'updated_at' => '2023-05-08 16:43:10',
                'deleted_at' => null,
            ],
            189 => [

                'district_id' => 19,
                'title' => 'Chhireshwornath Municipality',

                'created_at' => '2023-05-08 16:43:24',
                'updated_at' => '2023-05-08 16:43:24',
                'deleted_at' => null,
            ],
            190 => [

                'district_id' => 21,
                'title' => 'Pipra Rural Municipality',

                'created_at' => '2023-05-08 17:39:57',
                'updated_at' => '2023-05-08 17:39:57',
                'deleted_at' => null,
            ],
            191 => [

                'district_id' => 21,
                'title' => 'Sonama Rural Municipality',

                'created_at' => '2023-05-08 17:40:13',
                'updated_at' => '2023-05-08 17:40:13',
                'deleted_at' => null,
            ],
            192 => [

                'district_id' => 21,
                'title' => 'Samsi Rural Municipality',

                'created_at' => '2023-05-08 17:40:26',
                'updated_at' => '2023-05-08 17:40:26',
                'deleted_at' => null,
            ],
            193 => [

                'district_id' => 21,
                'title' => 'Ekdanra Rural Municipality',

                'created_at' => '2023-05-08 17:40:37',
                'updated_at' => '2023-05-08 17:40:37',
                'deleted_at' => null,
            ],
            194 => [

                'district_id' => 21,
                'title' => 'Mahottari Rural Municipality',

                'created_at' => '2023-05-08 17:40:49',
                'updated_at' => '2023-05-08 17:40:49',
                'deleted_at' => null,
            ],
            195 => [

                'district_id' => 21,
                'title' => 'Gaushala Municipality',

                'created_at' => '2023-05-08 17:41:04',
                'updated_at' => '2023-05-08 17:41:04',
                'deleted_at' => null,
            ],
            196 => [

                'district_id' => 21,
                'title' => 'Ramgopalpur Municipality',

                'created_at' => '2023-05-08 17:41:16',
                'updated_at' => '2023-05-08 17:41:16',
                'deleted_at' => null,
            ],
            197 => [

                'district_id' => 21,
                'title' => 'Aurahi Municipality',

                'created_at' => '2023-05-08 17:41:28',
                'updated_at' => '2023-05-08 17:41:28',
                'deleted_at' => null,
            ],
            198 => [

                'district_id' => 21,
                'title' => 'Bardibas Municipality',

                'created_at' => '2023-05-08 17:41:39',
                'updated_at' => '2023-05-08 17:41:39',
                'deleted_at' => null,
            ],
            199 => [

                'district_id' => 21,
                'title' => 'Bhangaha Municipality',

                'created_at' => '2023-05-08 17:41:50',
                'updated_at' => '2023-05-08 17:41:50',
                'deleted_at' => null,
            ],
            200 => [

                'district_id' => 21,
                'title' => 'Jaleswor Municipality',

                'created_at' => '2023-05-08 17:42:00',
                'updated_at' => '2023-05-08 17:42:00',
                'deleted_at' => null,
            ],
            201 => [

                'district_id' => 21,
                'title' => 'Balwa Municipality',

                'created_at' => '2023-05-08 17:42:10',
                'updated_at' => '2023-05-08 17:42:10',
                'deleted_at' => null,
            ],
            202 => [

                'district_id' => 21,
                'title' => 'Manra Siswa Municipality',

                'created_at' => '2023-05-08 17:42:22',
                'updated_at' => '2023-05-08 17:42:22',
                'deleted_at' => null,
            ],
            203 => [

                'district_id' => 21,
                'title' => 'Matihani Municipality',

                'created_at' => '2023-05-08 17:42:31',
                'updated_at' => '2023-05-08 17:42:31',
                'deleted_at' => null,
            ],
            204 => [

                'district_id' => 21,
                'title' => 'Loharpatti Municipality',

                'created_at' => '2023-05-08 17:42:42',
                'updated_at' => '2023-05-08 17:42:42',
                'deleted_at' => null,
            ],
            205 => [

                'district_id' => 18,
                'title' => 'Dhankaul Rural Municipality',

                'created_at' => '2023-05-08 17:43:25',
                'updated_at' => '2023-05-08 17:44:15',
                'deleted_at' => null,
            ],
            206 => [

                'district_id' => 18,
                'title' => 'Parsa Rural Municipality',

                'created_at' => '2023-05-08 17:43:36',
                'updated_at' => '2023-05-08 17:44:04',
                'deleted_at' => null,
            ],
            207 => [

                'district_id' => 18,
                'title' => 'Bishnu Rural Municipality',

                'created_at' => '2023-05-08 17:43:53',
                'updated_at' => '2023-05-08 17:43:53',
                'deleted_at' => null,
            ],
            208 => [

                'district_id' => 18,
                'title' => 'Ramnagar Rural Municipality',

                'created_at' => '2023-05-08 17:44:28',
                'updated_at' => '2023-05-08 17:44:28',
                'deleted_at' => null,
            ],
            209 => [

                'district_id' => 18,
                'title' => 'Kaudena Rural Municipality',

                'created_at' => '2023-05-08 17:44:41',
                'updated_at' => '2023-05-08 17:44:41',
                'deleted_at' => null,
            ],
            210 => [

                'district_id' => 18,
                'title' => 'Basbariya Rural Municipality',

                'created_at' => '2023-05-08 17:44:52',
                'updated_at' => '2023-05-08 17:44:52',
                'deleted_at' => null,
            ],
            211 => [

                'district_id' => 18,
                'title' => 'Chandranagar Rural Municipality',

                'created_at' => '2023-05-08 17:45:01',
                'updated_at' => '2023-05-08 17:45:01',
                'deleted_at' => null,
            ],
            212 => [

                'district_id' => 18,
                'title' => 'Chakraghatta Rural Municipality',

                'created_at' => '2023-05-08 17:45:10',
                'updated_at' => '2023-05-08 17:45:10',
                'deleted_at' => null,
            ],
            213 => [

                'district_id' => 18,
                'title' => 'Bramhapuri Rural Municipality',

                'created_at' => '2023-05-08 17:45:19',
                'updated_at' => '2023-05-08 17:45:19',
                'deleted_at' => null,
            ],
            214 => [

                'district_id' => 18,
                'title' => 'Barahathawa Municipality',

                'created_at' => '2023-05-08 17:45:29',
                'updated_at' => '2023-05-08 17:45:29',
                'deleted_at' => null,
            ],
            215 => [

                'district_id' => 18,
                'title' => 'Haripur Municipality',

                'created_at' => '2023-05-08 17:45:38',
                'updated_at' => '2023-05-08 17:45:38',
                'deleted_at' => null,
            ],
            216 => [

                'district_id' => 18,
                'title' => 'Ishworpur Municipality',

                'created_at' => '2023-05-08 17:45:47',
                'updated_at' => '2023-05-08 17:45:47',
                'deleted_at' => null,
            ],
            217 => [

                'district_id' => 18,
                'title' => 'Lalbandi Municipality',

                'created_at' => '2023-05-08 17:45:58',
                'updated_at' => '2023-05-08 17:45:58',
                'deleted_at' => null,
            ],
            218 => [

                'district_id' => 18,
                'title' => 'Malangawa Municipality',

                'created_at' => '2023-05-08 17:46:06',
                'updated_at' => '2023-05-08 17:46:06',
                'deleted_at' => null,
            ],
            219 => [

                'district_id' => 18,
                'title' => 'Kabilasi Municipality',

                'created_at' => '2023-05-08 17:46:16',
                'updated_at' => '2023-05-08 17:46:16',
                'deleted_at' => null,
            ],
            220 => [

                'district_id' => 18,
                'title' => 'Bagmati Municipality',

                'created_at' => '2023-05-08 17:46:27',
                'updated_at' => '2023-05-08 17:46:27',
                'deleted_at' => null,
            ],
            221 => [

                'district_id' => 18,
                'title' => 'Hariwan Municipality',

                'created_at' => '2023-05-08 18:05:20',
                'updated_at' => '2023-05-08 18:05:20',
                'deleted_at' => null,
            ],
            222 => [

                'district_id' => 18,
                'title' => 'Balara Municipality',

                'created_at' => '2023-05-08 18:05:31',
                'updated_at' => '2023-05-08 18:05:31',
                'deleted_at' => null,
            ],
            223 => [

                'district_id' => 18,
                'title' => 'Haripurwa Municipality',

                'created_at' => '2023-05-08 18:05:42',
                'updated_at' => '2023-05-08 18:05:42',
                'deleted_at' => null,
            ],
            224 => [

                'district_id' => 18,
                'title' => 'Godaita Municipality',

                'created_at' => '2023-05-08 18:05:53',
                'updated_at' => '2023-05-08 18:05:53',
                'deleted_at' => null,
            ],
            225 => [

                'district_id' => 17,
                'title' => 'Yemunamai Rural Municipality',

                'created_at' => '2023-05-08 18:06:38',
                'updated_at' => '2023-05-08 18:06:38',
                'deleted_at' => null,
            ],
            226 => [

                'district_id' => 17,
                'title' => 'Durga Bhagwati Rural Municipality',

                'created_at' => '2023-05-08 18:06:49',
                'updated_at' => '2023-05-08 18:06:49',
                'deleted_at' => null,
            ],
            227 => [

                'district_id' => 17,
                'title' => 'Katahariya Municipality',

                'created_at' => '2023-05-08 18:07:01',
                'updated_at' => '2023-05-08 18:07:01',
                'deleted_at' => null,
            ],
            228 => [

                'district_id' => 17,
                'title' => 'Maulapur Municipality',

                'created_at' => '2023-05-08 18:07:12',
                'updated_at' => '2023-05-08 18:07:12',
                'deleted_at' => null,
            ],
            229 => [

                'district_id' => 17,
                'title' => 'Madhav Narayan Municipality',

                'created_at' => '2023-05-08 18:07:23',
                'updated_at' => '2023-05-08 18:07:23',
                'deleted_at' => null,
            ],
            230 => [

                'district_id' => 17,
                'title' => 'Gaur Municipality',

                'created_at' => '2023-05-08 18:07:32',
                'updated_at' => '2023-05-08 18:07:32',
                'deleted_at' => null,
            ],
            231 => [

                'district_id' => 17,
                'title' => 'Gujara Municipality',

                'created_at' => '2023-05-08 18:07:46',
                'updated_at' => '2023-05-08 18:07:46',
                'deleted_at' => null,
            ],
            232 => [

                'district_id' => 17,
                'title' => 'Garuda Municipality',

                'created_at' => '2023-05-08 18:07:57',
                'updated_at' => '2023-05-08 18:07:57',
                'deleted_at' => null,
            ],
            233 => [

                'district_id' => 17,
                'title' => 'Ishanath Municipality',

                'created_at' => '2023-05-08 18:08:08',
                'updated_at' => '2023-05-08 18:08:08',
                'deleted_at' => null,
            ],
            234 => [

                'district_id' => 17,
                'title' => 'Chandrapur Municipality',

                'created_at' => '2023-05-08 18:08:18',
                'updated_at' => '2023-05-08 18:08:18',
                'deleted_at' => null,
            ],
            235 => [

                'district_id' => 17,
                'title' => 'Dewahhi Gonahi Municipality',

                'created_at' => '2023-05-08 18:08:29',
                'updated_at' => '2023-05-08 18:08:29',
                'deleted_at' => null,
            ],
            236 => [

                'district_id' => 17,
                'title' => 'Brindaban Municipality',

                'created_at' => '2023-05-08 18:08:39',
                'updated_at' => '2023-05-08 18:08:39',
                'deleted_at' => null,
            ],
            237 => [

                'district_id' => 17,
                'title' => 'Rajpur Municipality',

                'created_at' => '2023-05-08 18:08:51',
                'updated_at' => '2023-05-08 18:08:51',
                'deleted_at' => null,
            ],
            238 => [

                'district_id' => 17,
                'title' => 'Rajdevi Municipality',

                'created_at' => '2023-05-08 18:09:02',
                'updated_at' => '2023-05-08 18:09:02',
                'deleted_at' => null,
            ],
            239 => [

                'district_id' => 17,
                'title' => 'Gadhimai Municipality',

                'created_at' => '2023-05-08 18:09:11',
                'updated_at' => '2023-05-08 18:09:11',
                'deleted_at' => null,
            ],
            240 => [

                'district_id' => 17,
                'title' => 'Phatuwa Bijayapur Municipality',

                'created_at' => '2023-05-08 18:09:20',
                'updated_at' => '2023-05-08 18:09:20',
                'deleted_at' => null,
            ],
            241 => [

                'district_id' => 17,
                'title' => 'Baudhimai Municipality',

                'created_at' => '2023-05-08 18:09:31',
                'updated_at' => '2023-05-08 18:09:31',
                'deleted_at' => null,
            ],
            242 => [

                'district_id' => 17,
                'title' => 'Paroha Municipality',

                'created_at' => '2023-05-08 18:09:42',
                'updated_at' => '2023-05-08 18:09:42',
                'deleted_at' => null,
            ],
            243 => [

                'district_id' => 16,
                'title' => 'Pheta Rural Municipality',

                'created_at' => '2023-05-08 18:14:52',
                'updated_at' => '2023-05-08 18:14:52',
                'deleted_at' => null,
            ],
            244 => [

                'district_id' => 16,
                'title' => 'Devtal Rural Municipality',

                'created_at' => '2023-05-08 18:15:02',
                'updated_at' => '2023-05-08 18:15:02',
                'deleted_at' => null,
            ],
            245 => [

                'district_id' => 16,
                'title' => 'Prasauni Rural Municipality',

                'created_at' => '2023-05-08 18:15:14',
                'updated_at' => '2023-05-08 18:15:14',
                'deleted_at' => null,
            ],
            246 => [

                'district_id' => 16,
                'title' => 'Suwarna Rural Municipality',

                'created_at' => '2023-05-08 18:15:24',
                'updated_at' => '2023-05-08 18:15:24',
                'deleted_at' => null,
            ],
            247 => [

                'district_id' => 16,
                'title' => 'Baragadhi Rural Municipality',

                'created_at' => '2023-05-08 18:15:35',
                'updated_at' => '2023-05-08 18:15:35',
                'deleted_at' => null,
            ],
            248 => [

                'district_id' => 16,
                'title' => 'Karaiyamai Rural Municipality',

                'created_at' => '2023-05-08 18:15:48',
                'updated_at' => '2023-05-08 18:15:48',
                'deleted_at' => null,
            ],
            249 => [

                'district_id' => 16,
                'title' => 'Parwanipur Rural Municipality',

                'created_at' => '2023-05-08 18:15:59',
                'updated_at' => '2023-05-08 18:15:59',
                'deleted_at' => null,
            ],
            250 => [

                'district_id' => 16,
                'title' => 'Bishrampur Rural Municipality',

                'created_at' => '2023-05-08 18:16:09',
                'updated_at' => '2023-05-08 18:16:09',
                'deleted_at' => null,
            ],
            251 => [

                'district_id' => 16,
                'title' => 'Adarshkotwal Rural Municipality',

                'created_at' => '2023-05-08 18:16:21',
                'updated_at' => '2023-05-08 18:16:21',
                'deleted_at' => null,
            ],
            252 => [

                'district_id' => 16,
                'title' => 'Jitpur Simara Sub-Metropolitian City',

                'created_at' => '2023-05-08 18:16:31',
                'updated_at' => '2023-05-08 18:16:31',
                'deleted_at' => null,
            ],
            253 => [

                'district_id' => 16,
                'title' => 'Kalaiya Sub-Metropolitian City',

                'created_at' => '2023-05-08 18:16:42',
                'updated_at' => '2023-05-08 18:16:42',
                'deleted_at' => null,
            ],
            254 => [

                'district_id' => 16,
                'title' => 'Pacharauta Municipality',

                'created_at' => '2023-05-08 18:16:55',
                'updated_at' => '2023-05-08 18:16:55',
                'deleted_at' => null,
            ],
            255 => [

                'district_id' => 16,
                'title' => 'Nijgadh Municipality',

                'created_at' => '2023-05-08 18:17:06',
                'updated_at' => '2023-05-08 18:17:06',
                'deleted_at' => null,
            ],
            256 => [

                'district_id' => 16,
                'title' => 'Simraungadh Municipality',

                'created_at' => '2023-05-08 18:17:17',
                'updated_at' => '2023-05-08 18:17:17',
                'deleted_at' => null,
            ],
            257 => [

                'district_id' => 16,
                'title' => 'Mahagadhimai Municipality',

                'created_at' => '2023-05-08 18:17:26',
                'updated_at' => '2023-05-08 18:17:26',
                'deleted_at' => null,
            ],
            258 => [

                'district_id' => 16,
                'title' => 'Kolhabi Municipality',

                'created_at' => '2023-05-08 18:17:39',
                'updated_at' => '2023-05-08 18:17:39',
                'deleted_at' => null,
            ],
            259 => [

                'district_id' => 15,
                'title' => 'Thori Rural Municipality',

                'created_at' => '2023-05-08 18:19:00',
                'updated_at' => '2023-05-08 18:19:00',
                'deleted_at' => null,
            ],
            260 => [

                'district_id' => 15,
                'title' => 'Dhobini Rural Municipality',

                'created_at' => '2023-05-08 18:19:15',
                'updated_at' => '2023-05-08 18:19:15',
                'deleted_at' => null,
            ],
            261 => [

                'district_id' => 15,
                'title' => 'Chhipaharmai Rural Municipality',

                'created_at' => '2023-05-08 18:19:26',
                'updated_at' => '2023-05-08 18:19:26',
                'deleted_at' => null,
            ],
            262 => [

                'district_id' => 15,
                'title' => 'Jirabhawani Rural Municipality',

                'created_at' => '2023-05-08 18:19:37',
                'updated_at' => '2023-05-08 18:19:37',
                'deleted_at' => null,
            ],
            263 => [

                'district_id' => 15,
                'title' => 'Jagarnathpur Rural Municipality',

                'created_at' => '2023-05-08 18:19:48',
                'updated_at' => '2023-05-08 18:19:48',
                'deleted_at' => null,
            ],
            264 => [

                'district_id' => 15,
                'title' => 'Kalikamai Rural Municipality',

                'created_at' => '2023-05-08 18:19:59',
                'updated_at' => '2023-05-08 18:19:59',
                'deleted_at' => null,
            ],
            265 => [

                'district_id' => 15,
                'title' => 'Bindabasini Rural Municipality',

                'created_at' => '2023-05-08 18:20:10',
                'updated_at' => '2023-05-08 18:20:10',
                'deleted_at' => null,
            ],
            266 => [

                'district_id' => 15,
                'title' => 'Pakahamainpur Rural Municipality',

                'created_at' => '2023-05-08 18:20:20',
                'updated_at' => '2023-05-08 18:20:20',
                'deleted_at' => null,
            ],
            267 => [

                'district_id' => 15,
                'title' => 'SakhuwaPrasauni Rural Municipality',

                'created_at' => '2023-05-08 18:20:31',
                'updated_at' => '2023-05-08 18:20:31',
                'deleted_at' => null,
            ],
            268 => [

                'district_id' => 15,
                'title' => 'Paterwasugauli Rural Municipality',

                'created_at' => '2023-05-08 18:20:41',
                'updated_at' => '2023-05-08 18:20:41',
                'deleted_at' => null,
            ],
            269 => [

                'district_id' => 15,
                'title' => 'Birgunj Metropolitian City',

                'created_at' => '2023-05-08 18:20:52',
                'updated_at' => '2023-05-08 18:20:52',
                'deleted_at' => null,
            ],
            270 => [

                'district_id' => 15,
                'title' => 'Bahudaramai Municipality',

                'created_at' => '2023-05-08 18:21:03',
                'updated_at' => '2023-05-08 18:21:03',
                'deleted_at' => null,
            ],
            271 => [

                'district_id' => 15,
                'title' => 'Pokhariya Municipality',

                'created_at' => '2023-05-08 18:21:13',
                'updated_at' => '2023-05-08 18:21:13',
                'deleted_at' => null,
            ],
            272 => [

                'district_id' => 15,
                'title' => 'Parsagadhi Municipality',

                'created_at' => '2023-05-08 18:21:24',
                'updated_at' => '2023-05-08 18:21:24',
                'deleted_at' => null,
            ],
            273 => [

                'district_id' => 25,
                'title' => 'Bigu Rural Municipality',

                'created_at' => '2023-05-08 18:22:31',
                'updated_at' => '2023-05-08 18:22:31',
                'deleted_at' => null,
            ],
            274 => [

                'district_id' => 25,
                'title' => 'Sailung Rural Municipality',

                'created_at' => '2023-05-08 18:22:42',
                'updated_at' => '2023-05-08 18:22:42',
                'deleted_at' => null,
            ],
            275 => [

                'district_id' => 25,
                'title' => 'Melung Rural Municipality',

                'created_at' => '2023-05-08 18:22:52',
                'updated_at' => '2023-05-08 18:22:52',
                'deleted_at' => null,
            ],
            276 => [

                'district_id' => 25,
                'title' => 'Baiteshwor Rural Municipality',

                'created_at' => '2023-05-08 18:23:04',
                'updated_at' => '2023-05-08 18:23:04',
                'deleted_at' => null,
            ],
            277 => [

                'district_id' => 25,
                'title' => 'Tamakoshi Rural Municipality',

                'created_at' => '2023-05-08 18:23:14',
                'updated_at' => '2023-05-08 18:23:14',
                'deleted_at' => null,
            ],
            278 => [

                'district_id' => 25,
                'title' => 'Gaurishankar Rural Municipality',

                'created_at' => '2023-05-08 18:23:25',
                'updated_at' => '2023-05-08 18:23:25',
                'deleted_at' => null,
            ],
            279 => [

                'district_id' => 25,
                'title' => 'Kalinchok Rural Municipality',

                'created_at' => '2023-05-08 18:23:36',
                'updated_at' => '2023-05-08 18:23:36',
                'deleted_at' => null,
            ],
            280 => [

                'district_id' => 25,
                'title' => 'Jiri Municipality',

                'created_at' => '2023-05-08 18:23:48',
                'updated_at' => '2023-05-08 18:23:48',
                'deleted_at' => null,
            ],
            281 => [

                'district_id' => 25,
                'title' => 'Bhimeshwor Municipality',

                'created_at' => '2023-05-08 18:24:09',
                'updated_at' => '2023-05-08 18:24:09',
                'deleted_at' => null,
            ],
            282 => [

                'district_id' => 33,
                'title' => 'Jugal Rural Municipality',

                'created_at' => '2023-05-08 18:56:33',
                'updated_at' => '2023-05-08 18:56:33',
                'deleted_at' => null,
            ],
            283 => [

                'district_id' => 33,
                'title' => 'Balefi Rural Municipality',

                'created_at' => '2023-05-08 18:56:44',
                'updated_at' => '2023-05-08 18:56:44',
                'deleted_at' => null,
            ],
            284 => [

                'district_id' => 33,
                'title' => 'Sunkoshi Rural Municipality',

                'created_at' => '2023-05-08 18:56:54',
                'updated_at' => '2023-05-08 18:56:54',
                'deleted_at' => null,
            ],
            285 => [

                'district_id' => 33,
                'title' => 'Helambu Rural Municipality',

                'created_at' => '2023-05-08 18:57:06',
                'updated_at' => '2023-05-08 18:57:06',
                'deleted_at' => null,
            ],
            286 => [

                'district_id' => 33,
                'title' => 'Bhotekoshi Rural Municipality',

                'created_at' => '2023-05-08 18:57:16',
                'updated_at' => '2023-05-08 18:57:16',
                'deleted_at' => null,
            ],
            287 => [

                'district_id' => 33,
                'title' => 'Lisangkhu Pakhar Rural Municipality',

                'created_at' => '2023-05-08 18:57:26',
                'updated_at' => '2023-05-08 18:57:26',
                'deleted_at' => null,
            ],
            288 => [

                'district_id' => 33,
                'title' => 'Indrawati Rural Municipality',

                'created_at' => '2023-05-08 18:57:36',
                'updated_at' => '2023-05-08 18:57:36',
                'deleted_at' => null,
            ],
            289 => [

                'district_id' => 33,
                'title' => 'Tripurasundari Rural Municipality',

                'created_at' => '2023-05-08 18:57:46',
                'updated_at' => '2023-05-08 18:57:46',
                'deleted_at' => null,
            ],
            290 => [

                'district_id' => 33,
                'title' => 'Panchpokhari Thangpal Rural Municipality',

                'created_at' => '2023-05-08 18:57:56',
                'updated_at' => '2023-05-08 18:57:56',
                'deleted_at' => null,
            ],
            291 => [

                'district_id' => 33,
                'title' => 'Chautara SangachokGadhi Municipality',

                'created_at' => '2023-05-08 18:58:09',
                'updated_at' => '2023-05-08 18:58:09',
                'deleted_at' => null,
            ],
            292 => [

                'district_id' => 33,
                'title' => 'Barhabise Municipality',

                'created_at' => '2023-05-08 18:58:20',
                'updated_at' => '2023-05-08 18:58:20',
                'deleted_at' => null,
            ],
            293 => [

                'district_id' => 33,
                'title' => 'Melamchi Municipality',

                'created_at' => '2023-05-08 18:58:32',
                'updated_at' => '2023-05-08 18:58:32',
                'deleted_at' => null,
            ],
            294 => [

                'district_id' => 32,
                'title' => 'Kalika Rural Municipality',

                'created_at' => '2023-05-09 08:56:26',
                'updated_at' => '2023-05-09 08:56:26',
                'deleted_at' => null,
            ],
            295 => [

                'district_id' => 32,
                'title' => 'Naukunda Rural Municipality',

                'created_at' => '2023-05-09 08:56:38',
                'updated_at' => '2023-05-09 08:56:38',
                'deleted_at' => null,
            ],
            296 => [

                'district_id' => 32,
                'title' => 'Uttargaya Rural Municipality',

                'created_at' => '2023-05-09 08:56:47',
                'updated_at' => '2023-05-09 08:56:47',
                'deleted_at' => null,
            ],
            297 => [

                'district_id' => 32,
                'title' => 'Gosaikunda Rural Municipality',

                'created_at' => '2023-05-09 08:56:56',
                'updated_at' => '2023-05-09 08:56:56',
                'deleted_at' => null,
            ],
            298 => [

                'district_id' => 32,
                'title' => 'Amachodingmo Rural Municipality',

                'created_at' => '2023-05-09 08:57:06',
                'updated_at' => '2023-05-09 08:57:06',
                'deleted_at' => null,
            ],
            299 => [

                'district_id' => 27,
                'title' => 'Gajuri Rural Municipality',

                'created_at' => '2023-05-09 08:57:35',
                'updated_at' => '2023-05-09 08:57:35',
                'deleted_at' => null,
            ],
            300 => [

                'district_id' => 27,
                'title' => 'Galchi Rural Municipality',

                'created_at' => '2023-05-09 08:57:48',
                'updated_at' => '2023-05-09 08:57:48',
                'deleted_at' => null,
            ],
            301 => [

                'district_id' => 27,
                'title' => 'Thakre Rural Municipality',

                'created_at' => '2023-05-09 08:57:59',
                'updated_at' => '2023-05-09 08:57:59',
                'deleted_at' => null,
            ],
            302 => [

                'district_id' => 27,
                'title' => 'Siddhalek Rural Municipality',

                'created_at' => '2023-05-09 08:58:11',
                'updated_at' => '2023-05-09 08:58:11',
                'deleted_at' => null,
            ],
            303 => [

                'district_id' => 27,
                'title' => 'Khaniyabash Rural Municipality',

                'created_at' => '2023-05-09 08:58:20',
                'updated_at' => '2023-05-09 08:58:20',
                'deleted_at' => null,
            ],
            304 => [

                'district_id' => 27,
                'title' => 'Jwalamukhi Rural Municipality',

                'created_at' => '2023-05-09 08:58:30',
                'updated_at' => '2023-05-09 08:58:30',
                'deleted_at' => null,
            ],
            305 => [

                'district_id' => 27,
                'title' => 'Gangajamuna Rural Municipality',

                'created_at' => '2023-05-09 08:58:41',
                'updated_at' => '2023-05-09 08:58:41',
                'deleted_at' => null,
            ],
            306 => [

                'district_id' => 27,
                'title' => 'Rubi Valley Rural Municipality',

                'created_at' => '2023-05-09 08:58:51',
                'updated_at' => '2023-05-09 08:58:51',
                'deleted_at' => null,
            ],
            307 => [

                'district_id' => 27,
                'title' => 'Tripura Sundari Rural Municipality',

                'created_at' => '2023-05-09 08:59:00',
                'updated_at' => '2023-05-09 08:59:00',
                'deleted_at' => null,
            ],
            308 => [

                'district_id' => 27,
                'title' => 'Netrawati Dabjong Rural Municipality',

                'created_at' => '2023-05-09 08:59:10',
                'updated_at' => '2023-05-09 08:59:10',
                'deleted_at' => null,
            ],
            309 => [

                'district_id' => 27,
                'title' => 'Benighat Rorang Rural Municipality',

                'created_at' => '2023-05-09 08:59:20',
                'updated_at' => '2023-05-09 08:59:20',
                'deleted_at' => null,
            ],
            310 => [

                'district_id' => 27,
                'title' => 'Nilakantha Municipality',

                'created_at' => '2023-05-09 08:59:30',
                'updated_at' => '2023-05-09 08:59:30',
                'deleted_at' => null,
            ],
            311 => [

                'district_id' => 27,
                'title' => 'Dhunibesi Municipality',

                'created_at' => '2023-05-09 08:59:40',
                'updated_at' => '2023-05-09 08:59:40',
                'deleted_at' => null,
            ],
            312 => [

                'district_id' => 31,
                'title' => 'Kakani Rural Municipality',

                'created_at' => '2023-05-09 09:00:06',
                'updated_at' => '2023-05-09 09:00:06',
                'deleted_at' => null,
            ],
            313 => [

                'district_id' => 31,
                'title' => 'Tadi Rural Municipality',

                'created_at' => '2023-05-09 09:00:16',
                'updated_at' => '2023-05-09 09:00:16',
                'deleted_at' => null,
            ],
            314 => [

                'district_id' => 31,
                'title' => 'Likhu Rural Municipality',

                'created_at' => '2023-05-09 09:00:26',
                'updated_at' => '2023-05-09 09:00:26',
                'deleted_at' => null,
            ],
            315 => [

                'district_id' => 31,
                'title' => 'Myagang Rural Municipality',

                'created_at' => '2023-05-09 09:00:38',
                'updated_at' => '2023-05-09 09:00:38',
                'deleted_at' => null,
            ],
            316 => [

                'district_id' => 31,
                'title' => 'Shivapuri Rural Municipality',

                'created_at' => '2023-05-09 09:00:49',
                'updated_at' => '2023-05-09 09:00:49',
                'deleted_at' => null,
            ],
            317 => [

                'district_id' => 31,
                'title' => 'Kispang Rural Municipality',

                'created_at' => '2023-05-09 09:01:01',
                'updated_at' => '2023-05-09 09:01:01',
                'deleted_at' => null,
            ],
            318 => [

                'district_id' => 31,
                'title' => 'Suryagadhi Rural Municipality',

                'created_at' => '2023-05-09 09:01:13',
                'updated_at' => '2023-05-09 09:01:13',
                'deleted_at' => null,
            ],
            319 => [

                'district_id' => 31,
                'title' => 'Tarkeshwar Rural Municipality',

                'created_at' => '2023-05-09 09:01:22',
                'updated_at' => '2023-05-09 09:01:22',
                'deleted_at' => null,
            ],
            320 => [

                'district_id' => 31,
                'title' => 'Panchakanya Rural Municipality',

                'created_at' => '2023-05-09 09:01:32',
                'updated_at' => '2023-05-09 09:01:32',
                'deleted_at' => null,
            ],
            321 => [

                'district_id' => 31,
                'title' => 'Dupcheshwar Rural Municipality',

                'created_at' => '2023-05-09 09:01:42',
                'updated_at' => '2023-05-09 09:01:42',
                'deleted_at' => null,
            ],
            322 => [

                'district_id' => 31,
                'title' => 'Belkotgadhi Municipality',

                'created_at' => '2023-05-09 09:01:53',
                'updated_at' => '2023-05-09 09:01:53',
                'deleted_at' => null,
            ],
            323 => [

                'district_id' => 31,
                'title' => 'Bidur Municipality',

                'created_at' => '2023-05-09 09:02:04',
                'updated_at' => '2023-05-09 09:02:04',
                'deleted_at' => null,
            ],
            324 => [

                'district_id' => 28,
                'title' => 'Kirtipur Municipality',

                'created_at' => '2023-05-09 09:02:37',
                'updated_at' => '2023-05-09 09:02:37',
                'deleted_at' => null,
            ],
            325 => [

                'district_id' => 28,
                'title' => 'Shankharapur Municipality',

                'created_at' => '2023-05-09 09:02:47',
                'updated_at' => '2023-05-09 09:02:47',
                'deleted_at' => null,
            ],
            326 => [

                'district_id' => 28,
                'title' => 'Nagarjun Municipality',

                'created_at' => '2023-05-09 09:02:59',
                'updated_at' => '2023-05-09 09:02:59',
                'deleted_at' => null,
            ],
            327 => [

                'district_id' => 28,
                'title' => 'Kageshwori Manahora Municipality',

                'created_at' => '2023-05-09 09:03:10',
                'updated_at' => '2023-05-09 09:03:10',
                'deleted_at' => null,
            ],
            328 => [

                'district_id' => 28,
                'title' => 'Dakshinkali Municipality',

                'created_at' => '2023-05-09 09:03:20',
                'updated_at' => '2023-05-09 09:03:20',
                'deleted_at' => null,
            ],
            329 => [

                'district_id' => 28,
                'title' => 'Budhanilakantha Municipality',

                'created_at' => '2023-05-09 09:03:30',
                'updated_at' => '2023-05-09 09:03:30',
                'deleted_at' => null,
            ],
            330 => [

                'district_id' => 28,
                'title' => 'Tarakeshwor Municipality',

                'created_at' => '2023-05-09 09:03:41',
                'updated_at' => '2023-05-09 09:03:41',
                'deleted_at' => null,
            ],
            331 => [

                'district_id' => 28,
                'title' => 'Kathmandu Metropolitian City',

                'created_at' => '2023-05-09 09:03:51',
                'updated_at' => '2023-05-09 09:03:51',
                'deleted_at' => null,
            ],
            332 => [

                'district_id' => 28,
                'title' => 'Tokha Municipality',

                'created_at' => '2023-05-09 09:04:02',
                'updated_at' => '2023-05-09 09:04:02',
                'deleted_at' => null,
            ],
            333 => [

                'district_id' => 28,
                'title' => 'Chandragiri Municipality',

                'created_at' => '2023-05-09 09:04:12',
                'updated_at' => '2023-05-09 09:04:12',
                'deleted_at' => null,
            ],
            334 => [

                'district_id' => 28,
                'title' => 'Gokarneshwor Municipality',

                'created_at' => '2023-05-09 09:04:22',
                'updated_at' => '2023-05-09 09:04:22',
                'deleted_at' => null,
            ],
            335 => [

                'district_id' => 26,
                'title' => 'Changunarayan Municipality',

                'created_at' => '2023-05-09 09:05:03',
                'updated_at' => '2023-05-09 09:05:03',
                'deleted_at' => null,
            ],
            336 => [

                'district_id' => 26,
                'title' => 'Suryabinayak Municipality',

                'created_at' => '2023-05-09 09:05:14',
                'updated_at' => '2023-05-09 09:05:14',
                'deleted_at' => null,
            ],
            337 => [

                'district_id' => 26,
                'title' => 'Bhaktapur Municipality',

                'created_at' => '2023-05-09 09:05:24',
                'updated_at' => '2023-05-09 09:05:24',
                'deleted_at' => null,
            ],
            338 => [

                'district_id' => 26,
                'title' => 'Madhyapur Thimi Municipality',

                'created_at' => '2023-05-09 09:05:34',
                'updated_at' => '2023-05-09 09:05:34',
                'deleted_at' => null,
            ],
            339 => [

                'district_id' => 30,
                'title' => 'Bagmati Rural Municipality',

                'created_at' => '2023-05-09 09:05:59',
                'updated_at' => '2023-05-09 09:05:59',
                'deleted_at' => null,
            ],
            340 => [

                'district_id' => 30,
                'title' => 'Mahankal Rural Municipality',

                'created_at' => '2023-05-09 09:06:11',
                'updated_at' => '2023-05-09 09:06:11',
                'deleted_at' => null,
            ],
            341 => [

                'district_id' => 30,
                'title' => 'Konjyosom Rural Municipality',

                'created_at' => '2023-05-09 09:06:21',
                'updated_at' => '2023-05-09 09:06:21',
                'deleted_at' => null,
            ],
            342 => [

                'district_id' => 30,
                'title' => 'Lalitpur Metropolitian City',

                'created_at' => '2023-05-09 09:06:39',
                'updated_at' => '2023-05-09 09:06:39',
                'deleted_at' => null,
            ],
            343 => [

                'district_id' => 30,
                'title' => 'Mahalaxmi Municipality',

                'created_at' => '2023-05-09 09:06:49',
                'updated_at' => '2023-05-09 09:06:49',
                'deleted_at' => null,
            ],
            344 => [

                'district_id' => 30,
                'title' => 'Godawari Municipality',

                'created_at' => '2023-05-09 09:07:00',
                'updated_at' => '2023-05-09 09:07:00',
                'deleted_at' => null,
            ],
            345 => [

                'district_id' => 29,
                'title' => 'Roshi Rural Municipality',

                'created_at' => '2023-05-09 09:08:07',
                'updated_at' => '2023-05-09 09:08:07',
                'deleted_at' => null,
            ],
            346 => [

                'district_id' => 29,
                'title' => 'Temal Rural Municipality',

                'created_at' => '2023-05-09 09:08:17',
                'updated_at' => '2023-05-09 09:08:17',
                'deleted_at' => null,
            ],
            347 => [

                'district_id' => 29,
                'title' => 'Bhumlu Rural Municipality',

                'created_at' => '2023-05-09 09:08:27',
                'updated_at' => '2023-05-09 09:08:27',
                'deleted_at' => null,
            ],
            348 => [

                'district_id' => 29,
                'title' => 'Mahabharat Rural Municipality',

                'created_at' => '2023-05-09 09:08:36',
                'updated_at' => '2023-05-09 09:08:36',
                'deleted_at' => null,
            ],
            349 => [

                'district_id' => 29,
                'title' => 'Bethanchowk Rural Municipality',

                'created_at' => '2023-05-09 09:08:46',
                'updated_at' => '2023-05-09 09:08:46',
                'deleted_at' => null,
            ],
            350 => [

                'district_id' => 29,
                'title' => 'Khanikhola Rural Municipality',

                'created_at' => '2023-05-09 09:08:56',
                'updated_at' => '2023-05-09 09:08:56',
                'deleted_at' => null,
            ],
            351 => [

                'district_id' => 29,
                'title' => 'Chaurideurali Rural Municipality',

                'created_at' => '2023-05-09 09:09:07',
                'updated_at' => '2023-05-09 09:09:07',
                'deleted_at' => null,
            ],
            352 => [

                'district_id' => 29,
                'title' => 'Banepa Municipality',

                'created_at' => '2023-05-09 09:09:19',
                'updated_at' => '2023-05-09 09:09:19',
                'deleted_at' => null,
            ],
            353 => [

                'district_id' => 29,
                'title' => 'Mandandeupur Municipality',

                'created_at' => '2023-05-09 09:09:33',
                'updated_at' => '2023-05-09 09:09:33',
                'deleted_at' => null,
            ],
            354 => [

                'district_id' => 29,
                'title' => 'Dhulikhel Municipality',

                'created_at' => '2023-05-09 09:09:43',
                'updated_at' => '2023-05-09 09:09:43',
                'deleted_at' => null,
            ],
            355 => [

                'district_id' => 29,
                'title' => 'Panauti Municipality',

                'created_at' => '2023-05-09 09:09:53',
                'updated_at' => '2023-05-09 09:09:53',
                'deleted_at' => null,
            ],
            356 => [

                'district_id' => 29,
                'title' => 'Namobuddha Municipality',

                'created_at' => '2023-05-09 09:10:04',
                'updated_at' => '2023-05-09 09:10:04',
                'deleted_at' => null,
            ],
            357 => [

                'district_id' => 29,
                'title' => 'Panchkhal Municipality',

                'created_at' => '2023-05-09 09:10:14',
                'updated_at' => '2023-05-09 09:10:14',
                'deleted_at' => null,
            ],
            358 => [

                'district_id' => 24,
                'title' => 'Sunapati Rural Municipality',

                'created_at' => '2023-05-09 09:11:28',
                'updated_at' => '2023-05-09 09:11:28',
                'deleted_at' => null,
            ],
            359 => [

                'district_id' => 24,
                'title' => 'Doramba Rural Municipality',

                'created_at' => '2023-05-09 09:11:39',
                'updated_at' => '2023-05-09 09:11:39',
                'deleted_at' => null,
            ],
            360 => [

                'district_id' => 24,
                'title' => 'Umakunda Rural Municipality',

                'created_at' => '2023-05-09 09:11:49',
                'updated_at' => '2023-05-09 09:11:49',
                'deleted_at' => null,
            ],
            361 => [

                'district_id' => 24,
                'title' => 'Khadadevi Rural Municipality',

                'created_at' => '2023-05-09 09:12:01',
                'updated_at' => '2023-05-09 09:12:01',
                'deleted_at' => null,
            ],
            362 => [

                'district_id' => 24,
                'title' => 'Gokulganga Rural Municipality',

                'created_at' => '2023-05-09 09:12:13',
                'updated_at' => '2023-05-09 09:12:13',
                'deleted_at' => null,
            ],
            363 => [

                'district_id' => 24,
                'title' => 'Likhu Tamakoshi Rural Municipality',

                'created_at' => '2023-05-09 09:12:23',
                'updated_at' => '2023-05-09 09:12:23',
                'deleted_at' => null,
            ],
            364 => [

                'district_id' => 24,
                'title' => 'Manthali Municipality',

                'created_at' => '2023-05-09 09:12:33',
                'updated_at' => '2023-05-09 09:12:33',
                'deleted_at' => null,
            ],
            365 => [

                'district_id' => 24,
                'title' => 'Ramechhap Municipality',

                'created_at' => '2023-05-09 09:12:43',
                'updated_at' => '2023-05-09 09:12:43',
                'deleted_at' => null,
            ],
            366 => [

                'district_id' => 23,
                'title' => 'Marin Rural Municipality',

                'created_at' => '2023-05-09 09:13:22',
                'updated_at' => '2023-05-09 09:13:22',
                'deleted_at' => null,
            ],
            367 => [

                'district_id' => 23,
                'title' => 'Phikkal Rural Municipality',

                'created_at' => '2023-05-09 09:13:32',
                'updated_at' => '2023-05-09 09:13:32',
                'deleted_at' => null,
            ],
            368 => [

                'district_id' => 23,
                'title' => 'Tinpatan Rural Municipality',

                'created_at' => '2023-05-09 09:13:42',
                'updated_at' => '2023-05-09 09:13:42',
                'deleted_at' => null,
            ],
            369 => [

                'district_id' => 23,
                'title' => 'Sunkoshi Rural Municipality',

                'created_at' => '2023-05-09 09:13:52',
                'updated_at' => '2023-05-09 09:13:52',
                'deleted_at' => null,
            ],
            370 => [

                'district_id' => 23,
                'title' => 'Golanjor Rural Municipality',

                'created_at' => '2023-05-09 09:14:04',
                'updated_at' => '2023-05-09 09:14:04',
                'deleted_at' => null,
            ],
            371 => [

                'district_id' => 23,
                'title' => 'Ghanglekh Rural Municipality',

                'created_at' => '2023-05-09 09:14:16',
                'updated_at' => '2023-05-09 09:14:16',
                'deleted_at' => null,
            ],
            372 => [

                'district_id' => 23,
                'title' => 'Hariharpurgadhi Rural Municipality',

                'created_at' => '2023-05-09 09:14:26',
                'updated_at' => '2023-05-09 09:14:26',
                'deleted_at' => null,
            ],
            373 => [

                'district_id' => 23,
                'title' => 'Dudhouli Municipality',

                'created_at' => '2023-05-09 09:14:37',
                'updated_at' => '2023-05-09 09:14:37',
                'deleted_at' => null,
            ],
            374 => [

                'district_id' => 23,
                'title' => 'Kamalamai Municipality',

                'created_at' => '2023-05-09 09:14:49',
                'updated_at' => '2023-05-09 09:14:49',
                'deleted_at' => null,
            ],
            375 => [

                'district_id' => 35,
                'title' => 'Bakaiya Rural Municipality',

                'created_at' => '2023-05-09 09:15:31',
                'updated_at' => '2023-05-09 09:15:31',
                'deleted_at' => null,
            ],
            376 => [

                'district_id' => 35,
                'title' => 'Kailash Rural Municipality',

                'created_at' => '2023-05-09 09:15:41',
                'updated_at' => '2023-05-09 09:15:41',
                'deleted_at' => null,
            ],
            377 => [

                'district_id' => 35,
                'title' => 'Manahari Rural Municipality',

                'created_at' => '2023-05-09 09:15:50',
                'updated_at' => '2023-05-09 09:15:50',
                'deleted_at' => null,
            ],
            378 => [

                'district_id' => 35,
                'title' => 'Bhimphedi Rural Municipality',

                'created_at' => '2023-05-09 09:16:00',
                'updated_at' => '2023-05-09 09:16:00',
                'deleted_at' => null,
            ],
            379 => [

                'district_id' => 35,
                'title' => 'Bagmati Rural Municipality',

                'created_at' => '2023-05-09 09:16:09',
                'updated_at' => '2023-05-09 09:16:09',
                'deleted_at' => null,
            ],
            380 => [

                'district_id' => 35,
                'title' => 'Raksirang Rural Municipality',

                'created_at' => '2023-05-09 09:16:23',
                'updated_at' => '2023-05-09 09:16:23',
                'deleted_at' => null,
            ],
            381 => [

                'district_id' => 35,
                'title' => 'Makawanpurgadhi Rural Municipality',

                'created_at' => '2023-05-09 09:16:34',
                'updated_at' => '2023-05-09 09:16:34',
                'deleted_at' => null,
            ],
            382 => [

                'district_id' => 35,
                'title' => 'Indrasarowar Rural Municipality',

                'created_at' => '2023-05-09 09:16:44',
                'updated_at' => '2023-05-09 09:16:44',
                'deleted_at' => null,
            ],
            383 => [

                'district_id' => 35,
                'title' => 'Hetauda Sub-Metropolitian City',

                'created_at' => '2023-05-09 09:16:57',
                'updated_at' => '2023-05-09 09:16:57',
                'deleted_at' => null,
            ],
            384 => [

                'district_id' => 35,
                'title' => 'Thaha Municipality',

                'created_at' => '2023-05-09 09:17:07',
                'updated_at' => '2023-05-09 09:17:07',
                'deleted_at' => null,
            ],
            385 => [

                'district_id' => 34,
                'title' => 'Ichchhyakamana Rural Municipality',

                'created_at' => '2023-05-09 09:17:29',
                'updated_at' => '2023-05-09 09:17:29',
                'deleted_at' => null,
            ],
            386 => [

                'district_id' => 34,
                'title' => 'Bharatpur Metropolitian City',

                'created_at' => '2023-05-09 09:19:40',
                'updated_at' => '2023-05-09 09:19:40',
                'deleted_at' => null,
            ],
            387 => [

                'district_id' => 34,
                'title' => 'Kalika Municipality',

                'created_at' => '2023-05-09 09:19:54',
                'updated_at' => '2023-05-09 09:19:54',
                'deleted_at' => null,
            ],
            388 => [

                'district_id' => 34,
                'title' => 'Khairahani Municipality',

                'created_at' => '2023-05-09 09:20:06',
                'updated_at' => '2023-05-09 09:20:06',
                'deleted_at' => null,
            ],
            389 => [

                'district_id' => 34,
                'title' => 'Madi Municipality',

                'created_at' => '2023-05-09 09:20:18',
                'updated_at' => '2023-05-09 09:20:18',
                'deleted_at' => null,
            ],
            390 => [

                'district_id' => 34,
                'title' => 'Rapti Municipality',

                'created_at' => '2023-05-09 09:20:27',
                'updated_at' => '2023-05-09 09:20:27',
                'deleted_at' => null,
            ],
            391 => [

                'district_id' => 34,
                'title' => 'Ratnanagar Municipality',

                'created_at' => '2023-05-09 09:20:38',
                'updated_at' => '2023-05-09 09:20:38',
                'deleted_at' => null,
            ],
            392 => [

                'district_id' => 37,
                'title' => 'Gandaki Rural Municipality',

                'created_at' => '2023-05-09 09:22:06',
                'updated_at' => '2023-05-09 09:22:06',
                'deleted_at' => null,
            ],
            393 => [

                'district_id' => 37,
                'title' => 'Dharche Rural Municipality',

                'created_at' => '2023-05-09 09:22:16',
                'updated_at' => '2023-05-09 09:22:16',
                'deleted_at' => null,
            ],
            394 => [

                'district_id' => 37,
                'title' => 'Aarughat Rural Municipality',

                'created_at' => '2023-05-09 09:22:26',
                'updated_at' => '2023-05-09 09:22:26',
                'deleted_at' => null,
            ],
            395 => [

                'district_id' => 37,
                'title' => 'Ajirkot Rural Municipality',

                'created_at' => '2023-05-09 09:22:36',
                'updated_at' => '2023-05-09 09:22:36',
                'deleted_at' => null,
            ],
            396 => [

                'district_id' => 37,
                'title' => 'Sahid Lakhan Rural Municipality',

                'created_at' => '2023-05-09 09:22:46',
                'updated_at' => '2023-05-09 09:22:46',
                'deleted_at' => null,
            ],
            397 => [

                'district_id' => 37,
                'title' => 'Siranchok Rural Municipality',

                'created_at' => '2023-05-09 09:22:57',
                'updated_at' => '2023-05-09 09:22:57',
                'deleted_at' => null,
            ],
            398 => [

                'district_id' => 37,
                'title' => 'Bhimsenthapa Rural Municipality',

                'created_at' => '2023-05-09 09:23:08',
                'updated_at' => '2023-05-09 09:23:08',
                'deleted_at' => null,
            ],
            399 => [

                'district_id' => 37,
                'title' => 'Chum Nubri Rural Municipality',

                'created_at' => '2023-05-09 09:23:17',
                'updated_at' => '2023-05-09 09:23:17',
                'deleted_at' => null,
            ],
            400 => [

                'district_id' => 37,
                'title' => 'Barpak Sulikot Rural Municipality',

                'created_at' => '2023-05-09 09:23:27',
                'updated_at' => '2023-05-09 09:23:27',
                'deleted_at' => null,
            ],
            401 => [

                'district_id' => 37,
                'title' => 'Palungtar Municipality',

                'created_at' => '2023-05-09 09:23:36',
                'updated_at' => '2023-05-09 09:23:36',
                'deleted_at' => null,
            ],
            402 => [

                'district_id' => 37,
                'title' => 'Gorkha Municipality',

                'created_at' => '2023-05-09 09:23:47',
                'updated_at' => '2023-05-09 09:23:47',
                'deleted_at' => null,
            ],
            403 => [

                'district_id' => 40,
                'title' => 'Chame Rural Municipality',

                'created_at' => '2023-05-09 09:24:40',
                'updated_at' => '2023-05-09 09:24:40',
                'deleted_at' => null,
            ],
            404 => [

                'district_id' => 40,
                'title' => 'Narshon Rural Municipality',

                'created_at' => '2023-05-09 09:24:50',
                'updated_at' => '2023-05-09 09:24:50',
                'deleted_at' => null,
            ],
            405 => [

                'district_id' => 40,
                'title' => 'Narpa Bhumi Rural Municipality',

                'created_at' => '2023-05-09 09:25:02',
                'updated_at' => '2023-05-09 09:25:02',
                'deleted_at' => null,
            ],
            406 => [

                'district_id' => 40,
                'title' => 'Manang Ingshyang Rural Municipality',

                'created_at' => '2023-05-09 09:25:13',
                'updated_at' => '2023-05-09 09:25:13',
                'deleted_at' => null,
            ],
            407 => [

                'district_id' => 41,
                'title' => 'Thasang Rural Municipality',

                'created_at' => '2023-05-09 09:27:35',
                'updated_at' => '2023-05-09 09:27:35',
                'deleted_at' => null,
            ],
            408 => [

                'district_id' => 41,
                'title' => 'Gharapjhong Rural Municipality',

                'created_at' => '2023-05-09 09:27:45',
                'updated_at' => '2023-05-09 09:27:45',
                'deleted_at' => null,
            ],
            409 => [

                'district_id' => 41,
                'title' => 'Lomanthang Rural Municipality',

                'created_at' => '2023-05-09 09:27:55',
                'updated_at' => '2023-05-09 09:27:55',
                'deleted_at' => null,
            ],
            410 => [

                'district_id' => 41,
                'title' => 'Lo-Ghekar Damodarkunda Rural Municipality',

                'created_at' => '2023-05-09 09:28:04',
                'updated_at' => '2023-05-09 09:28:04',
                'deleted_at' => null,
            ],
            411 => [

                'district_id' => 41,
                'title' => 'Waragung Muktikhsetra Rural Municipality',

                'created_at' => '2023-05-09 09:28:15',
                'updated_at' => '2023-05-09 09:28:15',
                'deleted_at' => null,
            ],
            412 => [

                'district_id' => 42,
                'title' => 'Mangala Rural Municipality',

                'created_at' => '2023-05-09 09:29:15',
                'updated_at' => '2023-05-09 09:29:15',
                'deleted_at' => null,
            ],
            413 => [

                'district_id' => 42,
                'title' => 'Malika Rural Municipality',

                'created_at' => '2023-05-09 09:29:25',
                'updated_at' => '2023-05-09 09:29:25',
                'deleted_at' => null,
            ],
            414 => [

                'district_id' => 42,
                'title' => 'Raghuganga Rural Municipality',

                'created_at' => '2023-05-09 09:29:36',
                'updated_at' => '2023-05-09 09:29:36',
                'deleted_at' => null,
            ],
            415 => [

                'district_id' => 42,
                'title' => 'Dhaulagiri Rural Municipality',

                'created_at' => '2023-05-09 09:29:46',
                'updated_at' => '2023-05-09 09:29:46',
                'deleted_at' => null,
            ],
            416 => [

                'district_id' => 42,
                'title' => 'Annapurna Rural Municipality',

                'created_at' => '2023-05-09 09:29:56',
                'updated_at' => '2023-05-09 09:29:56',
                'deleted_at' => null,
            ],
            417 => [

                'district_id' => 42,
                'title' => 'Beni Municipality',

                'created_at' => '2023-05-09 09:30:06',
                'updated_at' => '2023-05-09 09:30:06',
                'deleted_at' => null,
            ],
            418 => [

                'district_id' => 38,
                'title' => 'Rupa Rural Municipality',

                'created_at' => '2023-05-09 09:30:38',
                'updated_at' => '2023-05-09 09:30:38',
                'deleted_at' => null,
            ],
            419 => [

                'district_id' => 38,
                'title' => 'Madi Rural Municipality',

                'created_at' => '2023-05-09 09:30:48',
                'updated_at' => '2023-05-09 09:30:48',
                'deleted_at' => null,
            ],
            420 => [

                'district_id' => 38,
                'title' => 'Annapurna Rural Municipality',

                'created_at' => '2023-05-09 09:30:58',
                'updated_at' => '2023-05-09 09:30:58',
                'deleted_at' => null,
            ],
            421 => [

                'district_id' => 38,
                'title' => 'Machhapuchchhre Rural Municipality',

                'created_at' => '2023-05-09 09:31:09',
                'updated_at' => '2023-05-09 09:31:09',
                'deleted_at' => null,
            ],
            422 => [

                'district_id' => 38,
                'title' => 'Pokhara Metropolitian City',

                'created_at' => '2023-05-09 09:31:20',
                'updated_at' => '2023-05-09 09:31:20',
                'deleted_at' => null,
            ],
            423 => [

                'district_id' => 39,
                'title' => 'Dordi Rural Municipality',

                'created_at' => '2023-05-09 09:31:45',
                'updated_at' => '2023-05-09 09:31:45',
                'deleted_at' => null,
            ],
            424 => [

                'district_id' => 39,
                'title' => 'Dudhpokhari Rural Municipality',

                'created_at' => '2023-05-09 09:31:56',
                'updated_at' => '2023-05-09 09:31:56',
                'deleted_at' => null,
            ],
            425 => [

                'district_id' => 39,
                'title' => 'Marsyangdi Rural Municipality',

                'created_at' => '2023-05-09 09:32:05',
                'updated_at' => '2023-05-09 09:32:05',
                'deleted_at' => null,
            ],
            426 => [

                'district_id' => 39,
                'title' => 'Kwholasothar Rural Municipality',

                'created_at' => '2023-05-09 09:32:16',
                'updated_at' => '2023-05-09 09:32:16',
                'deleted_at' => null,
            ],
            427 => [

                'district_id' => 39,
                'title' => 'Sundarbazar Municipality',

                'created_at' => '2023-05-09 09:32:26',
                'updated_at' => '2023-05-09 09:32:26',
                'deleted_at' => null,
            ],
            428 => [

                'district_id' => 39,
                'title' => 'Besishahar Municipality',

                'created_at' => '2023-05-09 09:32:37',
                'updated_at' => '2023-05-09 09:32:37',
                'deleted_at' => null,
            ],
            429 => [

                'district_id' => 39,
                'title' => 'Rainas Municipality',

                'created_at' => '2023-05-09 09:32:48',
                'updated_at' => '2023-05-09 09:32:48',
                'deleted_at' => null,
            ],
            430 => [

                'district_id' => 39,
                'title' => 'MadhyaNepal Municipality',

                'created_at' => '2023-05-09 09:32:59',
                'updated_at' => '2023-05-09 09:32:59',
                'deleted_at' => null,
            ],
            431 => [

                'district_id' => 46,
                'title' => 'Ghiring Rural Municipality',

                'created_at' => '2023-05-09 09:33:37',
                'updated_at' => '2023-05-09 09:33:37',
                'deleted_at' => null,
            ],
            432 => [

                'district_id' => 46,
                'title' => 'Devghat Rural Municipality',

                'created_at' => '2023-05-09 09:33:49',
                'updated_at' => '2023-05-09 09:33:49',
                'deleted_at' => null,
            ],
            433 => [

                'district_id' => 46,
                'title' => 'Rhishing Rural Municipality',

                'created_at' => '2023-05-09 09:34:01',
                'updated_at' => '2023-05-09 09:34:01',
                'deleted_at' => null,
            ],
            434 => [

                'district_id' => 46,
                'title' => 'Myagde Rural Municipality',

                'created_at' => '2023-05-09 09:34:12',
                'updated_at' => '2023-05-09 09:34:12',
                'deleted_at' => null,
            ],
            435 => [

                'district_id' => 46,
                'title' => 'Bandipur Rural Municipality',

                'created_at' => '2023-05-09 09:34:23',
                'updated_at' => '2023-05-09 09:34:23',
                'deleted_at' => null,
            ],
            436 => [

                'district_id' => 46,
                'title' => 'Anbukhaireni Rural Municipality',

                'created_at' => '2023-05-09 09:34:34',
                'updated_at' => '2023-05-09 09:34:34',
                'deleted_at' => null,
            ],
            437 => [

                'district_id' => 46,
                'title' => 'Byas Municipality',

                'created_at' => '2023-05-09 09:34:46',
                'updated_at' => '2023-05-09 09:34:46',
                'deleted_at' => null,
            ],
            438 => [

                'district_id' => 46,
                'title' => 'Shuklagandaki Municipality',

                'created_at' => '2023-05-09 09:34:58',
                'updated_at' => '2023-05-09 09:34:58',
                'deleted_at' => null,
            ],
            439 => [

                'district_id' => 46,
                'title' => 'Bhimad Municipality',

                'created_at' => '2023-05-09 09:35:08',
                'updated_at' => '2023-05-09 09:35:08',
                'deleted_at' => null,
            ],
            440 => [

                'district_id' => 46,
                'title' => 'Bhanu Municipality',

                'created_at' => '2023-05-09 09:35:18',
                'updated_at' => '2023-05-09 09:35:18',
                'deleted_at' => null,
            ],
            441 => [

                'district_id' => 43,
                'title' => 'Baudeekali Rural Municipality',

                'created_at' => '2023-05-09 09:36:28',
                'updated_at' => '2023-05-09 09:36:28',
                'deleted_at' => null,
            ],
            442 => [

                'district_id' => 43,
                'title' => 'Bulingtar Rural Municipality',

                'created_at' => '2023-05-09 09:36:44',
                'updated_at' => '2023-05-09 09:36:44',
                'deleted_at' => null,
            ],
            443 => [

                'district_id' => 43,
                'title' => 'Hupsekot Rural Municipality',

                'created_at' => '2023-05-09 09:36:55',
                'updated_at' => '2023-05-09 09:36:55',
                'deleted_at' => null,
            ],
            444 => [

                'district_id' => 43,
                'title' => 'Binayee Tribeni Rural Municipality',

                'created_at' => '2023-05-09 09:37:08',
                'updated_at' => '2023-05-09 09:37:08',
                'deleted_at' => null,
            ],
            445 => [

                'district_id' => 43,
                'title' => 'Madhyabindu Municipality',

                'created_at' => '2023-05-09 09:37:19',
                'updated_at' => '2023-05-09 09:37:19',
                'deleted_at' => null,
            ],
            446 => [

                'district_id' => 43,
                'title' => 'Devchuli Municipality',

                'created_at' => '2023-05-09 09:37:30',
                'updated_at' => '2023-05-09 09:37:30',
                'deleted_at' => null,
            ],
            447 => [

                'district_id' => 43,
                'title' => 'Gaidakot Municipality',

                'created_at' => '2023-05-09 09:37:40',
                'updated_at' => '2023-05-09 09:37:40',
                'deleted_at' => null,
            ],
            448 => [

                'district_id' => 43,
                'title' => 'Kawasoti Municipality',

                'created_at' => '2023-05-09 09:37:51',
                'updated_at' => '2023-05-09 09:37:51',
                'deleted_at' => null,
            ],
            449 => [

                'district_id' => 45,
                'title' => 'Harinas Rural Municipality',

                'created_at' => '2023-05-09 09:38:32',
                'updated_at' => '2023-05-09 09:38:32',
                'deleted_at' => null,
            ],
            450 => [

                'district_id' => 45,
                'title' => 'Biruwa Rural Municipality',

                'created_at' => '2023-05-09 09:38:42',
                'updated_at' => '2023-05-09 09:38:42',
                'deleted_at' => null,
            ],
            451 => [

                'district_id' => 45,
                'title' => 'Aandhikhola Rural Municipality',

                'created_at' => '2023-05-09 09:38:52',
                'updated_at' => '2023-05-09 09:38:52',
                'deleted_at' => null,
            ],
            452 => [

                'district_id' => 45,
                'title' => 'Phedikhola Rural Municipality',

                'created_at' => '2023-05-09 09:39:03',
                'updated_at' => '2023-05-09 09:39:03',
                'deleted_at' => null,
            ],
            453 => [

                'district_id' => 45,
                'title' => 'Kaligandagi Rural Municipality',

                'created_at' => '2023-05-09 09:39:14',
                'updated_at' => '2023-05-09 09:39:14',
                'deleted_at' => null,
            ],
            454 => [

                'district_id' => 45,
                'title' => 'Arjunchaupari Rural Municipality',

                'created_at' => '2023-05-09 09:39:24',
                'updated_at' => '2023-05-09 09:39:24',
                'deleted_at' => null,
            ],
            455 => [

                'district_id' => 45,
                'title' => 'Putalibazar Municipality',

                'created_at' => '2023-05-09 09:39:34',
                'updated_at' => '2023-05-09 09:39:34',
                'deleted_at' => null,
            ],
            456 => [

                'district_id' => 45,
                'title' => 'Bhirkot Municipality',

                'created_at' => '2023-05-09 09:39:43',
                'updated_at' => '2023-05-09 09:39:43',
                'deleted_at' => null,
            ],
            457 => [

                'district_id' => 45,
                'title' => 'Galyang Municipality',

                'created_at' => '2023-05-09 09:39:52',
                'updated_at' => '2023-05-09 09:39:52',
                'deleted_at' => null,
            ],
            458 => [

                'district_id' => 45,
                'title' => 'Chapakot Municipality',

                'created_at' => '2023-05-09 09:40:06',
                'updated_at' => '2023-05-09 09:40:06',
                'deleted_at' => null,
            ],
            459 => [

                'district_id' => 45,
                'title' => 'Waling Municipality',

                'created_at' => '2023-05-09 09:40:17',
                'updated_at' => '2023-05-09 09:40:17',
                'deleted_at' => null,
            ],
            460 => [

                'district_id' => 44,
                'title' => 'Modi Rural Municipality',

                'created_at' => '2023-05-09 09:41:05',
                'updated_at' => '2023-05-09 09:41:05',
                'deleted_at' => null,
            ],
            461 => [

                'district_id' => 44,
                'title' => 'Painyu Rural Municipality',

                'created_at' => '2023-05-09 09:41:15',
                'updated_at' => '2023-05-09 09:41:15',
                'deleted_at' => null,
            ],
            462 => [

                'district_id' => 44,
                'title' => 'Jaljala Rural Municipality',

                'created_at' => '2023-05-09 09:41:27',
                'updated_at' => '2023-05-09 09:41:27',
                'deleted_at' => null,
            ],
            463 => [

                'district_id' => 44,
                'title' => 'Bihadi Rural Municipality',

                'created_at' => '2023-05-09 09:41:38',
                'updated_at' => '2023-05-09 09:41:38',
                'deleted_at' => null,
            ],
            464 => [

                'district_id' => 44,
                'title' => 'Mahashila Rural Municipality',

                'created_at' => '2023-05-09 09:41:49',
                'updated_at' => '2023-05-09 09:41:49',
                'deleted_at' => null,
            ],
            465 => [

                'district_id' => 44,
                'title' => 'Kushma Municipality',

                'created_at' => '2023-05-09 09:42:04',
                'updated_at' => '2023-05-09 09:42:04',
                'deleted_at' => null,
            ],
            466 => [

                'district_id' => 44,
                'title' => 'Phalebas Municipality',

                'created_at' => '2023-05-09 09:42:16',
                'updated_at' => '2023-05-09 09:42:16',
                'deleted_at' => null,
            ],
            467 => [

                'district_id' => 36,
                'title' => 'Bareng Rural Municipality',

                'created_at' => '2023-05-09 09:42:45',
                'updated_at' => '2023-05-09 09:42:45',
                'deleted_at' => null,
            ],
            468 => [

                'district_id' => 36,
                'title' => 'Badigad Rural Municipality',

                'created_at' => '2023-05-09 09:42:54',
                'updated_at' => '2023-05-09 09:42:54',
                'deleted_at' => null,
            ],
            469 => [

                'district_id' => 36,
                'title' => 'Nisikhola Rural Municipality',

                'created_at' => '2023-05-09 09:43:05',
                'updated_at' => '2023-05-09 09:43:05',
                'deleted_at' => null,
            ],
            470 => [

                'district_id' => 36,
                'title' => 'Kanthekhola Rural Municipality',

                'created_at' => '2023-05-09 09:43:15',
                'updated_at' => '2023-05-09 09:43:15',
                'deleted_at' => null,
            ],
            471 => [

                'district_id' => 36,
                'title' => 'Tara Khola Rural Municipality',

                'created_at' => '2023-05-09 09:43:25',
                'updated_at' => '2023-05-09 09:43:25',
                'deleted_at' => null,
            ],
            472 => [

                'district_id' => 36,
                'title' => 'Taman Khola Rural Municipality',

                'created_at' => '2023-05-09 09:43:35',
                'updated_at' => '2023-05-09 09:43:35',
                'deleted_at' => null,
            ],
            473 => [

                'district_id' => 36,
                'title' => 'Jaimuni Municipality',

                'created_at' => '2023-05-09 09:43:45',
                'updated_at' => '2023-05-09 09:43:45',
                'deleted_at' => null,
            ],
            474 => [

                'district_id' => 36,
                'title' => 'Baglung Municipality',

                'created_at' => '2023-05-09 09:43:57',
                'updated_at' => '2023-05-09 09:43:57',
                'deleted_at' => null,
            ],
            475 => [

                'district_id' => 36,
                'title' => 'Galkot Municipality',

                'created_at' => '2023-05-09 09:44:09',
                'updated_at' => '2023-05-09 09:44:09',
                'deleted_at' => null,
            ],
            476 => [

                'district_id' => 36,
                'title' => 'Dhorpatan Municipality',

                'created_at' => '2023-05-09 09:44:23',
                'updated_at' => '2023-05-09 09:44:23',
                'deleted_at' => null,
            ],
            477 => [

                'district_id' => 56,
                'title' => 'Bhume Rural Municipality',

                'created_at' => '2023-05-09 09:46:43',
                'updated_at' => '2023-05-09 09:46:43',
                'deleted_at' => null,
            ],
            478 => [

                'district_id' => 56,
                'title' => 'Sisne Rural Municipality',

                'created_at' => '2023-05-09 09:46:54',
                'updated_at' => '2023-05-09 09:46:54',
                'deleted_at' => null,
            ],
            479 => [

                'district_id' => 56,
                'title' => 'Putha Uttarganga Rural Municipality',

                'created_at' => '2023-05-09 09:47:05',
                'updated_at' => '2023-05-09 09:47:05',
                'deleted_at' => null,
            ],
            480 => [

                'district_id' => 55,
                'title' => 'Madi Rural Municipality',

                'created_at' => '2023-05-09 09:47:41',
                'updated_at' => '2023-05-09 09:47:41',
                'deleted_at' => null,
            ],
            481 => [

                'district_id' => 55,
                'title' => 'Thawang Rural Municipality',

                'created_at' => '2023-05-09 09:47:51',
                'updated_at' => '2023-05-09 09:47:51',
                'deleted_at' => null,
            ],
            482 => [

                'district_id' => 55,
                'title' => 'Sunchhahari Rural Municipality',

                'created_at' => '2023-05-09 09:48:02',
                'updated_at' => '2023-05-09 09:48:02',
                'deleted_at' => null,
            ],
            483 => [

                'district_id' => 55,
                'title' => 'Lungri Rural Municipality',

                'created_at' => '2023-05-09 09:48:13',
                'updated_at' => '2023-05-09 09:48:13',
                'deleted_at' => null,
            ],
            484 => [

                'district_id' => 55,
                'title' => 'Gangadev Rural Municipality',

                'created_at' => '2023-05-09 09:48:25',
                'updated_at' => '2023-05-09 09:48:25',
                'deleted_at' => null,
            ],
            485 => [

                'district_id' => 55,
                'title' => 'Tribeni Rural Municipality',

                'created_at' => '2023-05-09 09:48:44',
                'updated_at' => '2023-05-09 09:48:44',
                'deleted_at' => null,
            ],
            486 => [

                'district_id' => 55,
                'title' => 'Pariwartan Rural Municipality',

                'created_at' => '2023-05-09 09:49:00',
                'updated_at' => '2023-05-09 09:49:00',
                'deleted_at' => null,
            ],
            487 => [

                'district_id' => 55,
                'title' => 'Runtigadi Rural Municipality',

                'created_at' => '2023-05-09 09:49:12',
                'updated_at' => '2023-05-09 09:49:12',
                'deleted_at' => null,
            ],
            488 => [

                'district_id' => 55,
                'title' => 'Sunil Smriti Rural Municipality',

                'created_at' => '2023-05-09 09:49:23',
                'updated_at' => '2023-05-09 09:49:23',
                'deleted_at' => null,
            ],
            489 => [

                'district_id' => 55,
                'title' => 'Rolpa Municipality',

                'created_at' => '2023-05-09 09:49:33',
                'updated_at' => '2023-05-09 09:49:33',
                'deleted_at' => null,
            ],
            490 => [

                'district_id' => 54,
                'title' => 'Ayirabati Rural Municipality',

                'created_at' => '2023-05-09 09:50:09',
                'updated_at' => '2023-05-09 09:50:09',
                'deleted_at' => null,
            ],
            491 => [

                'district_id' => 54,
                'title' => 'Gaumukhi Rural Municipality',

                'created_at' => '2023-05-09 09:50:20',
                'updated_at' => '2023-05-09 09:50:20',
                'deleted_at' => null,
            ],
            492 => [

                'district_id' => 54,
                'title' => 'Jhimruk Rural Municipality',

                'created_at' => '2023-05-09 09:50:29',
                'updated_at' => '2023-05-09 09:50:29',
                'deleted_at' => null,
            ],
            493 => [

                'district_id' => 54,
                'title' => 'Naubahini Rural Municipality',

                'created_at' => '2023-05-09 09:50:41',
                'updated_at' => '2023-05-09 09:50:41',
                'deleted_at' => null,
            ],
            494 => [

                'district_id' => 54,
                'title' => 'Mandavi Rural Municipality',

                'created_at' => '2023-05-09 09:50:53',
                'updated_at' => '2023-05-09 09:50:53',
                'deleted_at' => null,
            ],
            495 => [

                'district_id' => 54,
                'title' => 'Mallarani Rural Municipality',

                'created_at' => '2023-05-09 09:51:05',
                'updated_at' => '2023-05-09 09:51:05',
                'deleted_at' => null,
            ],
            496 => [

                'district_id' => 54,
                'title' => 'Sarumarani Rural Municipality',

                'created_at' => '2023-05-09 09:51:15',
                'updated_at' => '2023-05-09 09:51:15',
                'deleted_at' => null,
            ],
            497 => [

                'district_id' => 54,
                'title' => 'Pyuthan Municipality',

                'created_at' => '2023-05-09 09:51:25',
                'updated_at' => '2023-05-09 09:51:25',
                'deleted_at' => null,
            ],
            498 => [

                'district_id' => 54,
                'title' => 'Sworgadwary Municipality',

                'created_at' => '2023-05-09 09:51:36',
                'updated_at' => '2023-05-09 09:51:36',
                'deleted_at' => null,
            ],
            499 => [

                'district_id' => 51,
                'title' => 'Ruru Rural Municipality',

                'created_at' => '2023-05-09 09:52:34',
                'updated_at' => '2023-05-09 09:52:34',
                'deleted_at' => null,
            ],
        ]);
        DB::table('municipalities')->insert([
            0 => [

                'district_id' => 51,
                'title' => 'Isma Rural Municipality',

                'created_at' => '2023-05-09 09:52:44',
                'updated_at' => '2023-05-09 09:52:44',
                'deleted_at' => null,
            ],
            1 => [

                'district_id' => 51,
                'title' => 'Madane Rural Municipality',

                'created_at' => '2023-05-09 09:52:57',
                'updated_at' => '2023-05-09 09:52:57',
                'deleted_at' => null,
            ],
            2 => [

                'district_id' => 51,
                'title' => 'Malika Rural Municipality',

                'created_at' => '2023-05-09 09:53:08',
                'updated_at' => '2023-05-09 09:53:08',
                'deleted_at' => null,
            ],
            3 => [

                'district_id' => 51,
                'title' => 'Chatrakot Rural Municipality',

                'created_at' => '2023-05-09 09:53:20',
                'updated_at' => '2023-05-09 09:53:20',
                'deleted_at' => null,
            ],
            4 => [

                'district_id' => 51,
                'title' => 'Dhurkot Rural Municipality',

                'created_at' => '2023-05-09 09:53:30',
                'updated_at' => '2023-05-09 09:53:30',
                'deleted_at' => null,
            ],
            5 => [

                'district_id' => 51,
                'title' => 'Satyawati Rural Municipality',

                'created_at' => '2023-05-09 09:53:40',
                'updated_at' => '2023-05-09 09:53:40',
                'deleted_at' => null,
            ],
            6 => [

                'district_id' => 51,
                'title' => 'Chandrakot Rural Municipality',

                'created_at' => '2023-05-09 09:53:50',
                'updated_at' => '2023-05-09 09:53:50',
                'deleted_at' => null,
            ],
            7 => [

                'district_id' => 51,
                'title' => 'Kaligandaki Rural Municipality',

                'created_at' => '2023-05-09 09:54:01',
                'updated_at' => '2023-05-09 09:54:01',
                'deleted_at' => null,
            ],
            8 => [

                'district_id' => 51,
                'title' => 'Gulmidarbar Rural Municipality',

                'created_at' => '2023-05-09 09:54:11',
                'updated_at' => '2023-05-09 09:54:11',
                'deleted_at' => null,
            ],
            9 => [

                'district_id' => 51,
                'title' => 'Resunga Municipality',

                'created_at' => '2023-05-09 09:54:21',
                'updated_at' => '2023-05-09 09:54:21',
                'deleted_at' => null,
            ],
            10 => [

                'district_id' => 51,
                'title' => 'Musikot Municipality',

                'created_at' => '2023-05-09 09:54:31',
                'updated_at' => '2023-05-09 09:54:31',
                'deleted_at' => null,
            ],
            11 => [

                'district_id' => 50,
                'title' => 'Panini Rural Municipality',

                'created_at' => '2023-05-09 09:55:03',
                'updated_at' => '2023-05-09 09:55:03',
                'deleted_at' => null,
            ],
            12 => [

                'district_id' => 50,
                'title' => 'Chhatradev Rural Municipality',

                'created_at' => '2023-05-09 09:55:12',
                'updated_at' => '2023-05-09 09:55:12',
                'deleted_at' => null,
            ],
            13 => [

                'district_id' => 50,
                'title' => 'Malarani Rural Municipality',

                'created_at' => '2023-05-09 09:55:21',
                'updated_at' => '2023-05-09 09:55:21',
                'deleted_at' => null,
            ],
            14 => [

                'district_id' => 50,
                'title' => 'Bhumekasthan Municipality',

                'created_at' => '2023-05-09 09:55:31',
                'updated_at' => '2023-05-09 09:55:31',
                'deleted_at' => null,
            ],
            15 => [

                'district_id' => 50,
                'title' => 'Sitganga Municipality',

                'created_at' => '2023-05-09 09:55:42',
                'updated_at' => '2023-05-09 09:55:42',
                'deleted_at' => null,
            ],
            16 => [

                'district_id' => 50,
                'title' => 'Sandhikharka Municipality',

                'created_at' => '2023-05-09 09:55:52',
                'updated_at' => '2023-05-09 09:55:52',
                'deleted_at' => null,
            ],
            17 => [

                'district_id' => 52,
                'title' => 'Rambha Rural Municipality',

                'created_at' => '2023-05-09 09:56:36',
                'updated_at' => '2023-05-09 09:56:36',
                'deleted_at' => null,
            ],
            18 => [

                'district_id' => 52,
                'title' => 'Tinau Rural Municipality',

                'created_at' => '2023-05-09 09:56:46',
                'updated_at' => '2023-05-09 09:56:46',
                'deleted_at' => null,
            ],
            19 => [

                'district_id' => 52,
                'title' => 'Nisdi Rural Municipality',

                'created_at' => '2023-05-09 09:56:56',
                'updated_at' => '2023-05-09 09:56:56',
                'deleted_at' => null,
            ],
            20 => [

                'district_id' => 52,
                'title' => 'Mathagadhi Rural Municipality',

                'created_at' => '2023-05-09 09:57:07',
                'updated_at' => '2023-05-09 09:57:07',
                'deleted_at' => null,
            ],
            21 => [

                'district_id' => 52,
                'title' => 'Ribdikot Rural Municipality',

                'created_at' => '2023-05-09 09:57:18',
                'updated_at' => '2023-05-09 09:57:18',
                'deleted_at' => null,
            ],
            22 => [

                'district_id' => 52,
                'title' => 'Purbakhola Rural Municipality',

                'created_at' => '2023-05-09 09:57:28',
                'updated_at' => '2023-05-09 09:57:28',
                'deleted_at' => null,
            ],
            23 => [

                'district_id' => 52,
                'title' => 'Bagnaskali Rural Municipality',

                'created_at' => '2023-05-09 09:57:39',
                'updated_at' => '2023-05-09 09:57:39',
                'deleted_at' => null,
            ],
            24 => [

                'district_id' => 52,
                'title' => 'Rainadevi Chhahara Rural Municipality',

                'created_at' => '2023-05-09 09:57:50',
                'updated_at' => '2023-05-09 09:57:50',
                'deleted_at' => null,
            ],
            25 => [

                'district_id' => 52,
                'title' => 'Tansen Municipality',

                'created_at' => '2023-05-09 09:58:02',
                'updated_at' => '2023-05-09 09:58:02',
                'deleted_at' => null,
            ],
            26 => [

                'district_id' => 52,
                'title' => 'Rampur Municipality',

                'created_at' => '2023-05-09 09:58:13',
                'updated_at' => '2023-05-09 09:58:13',
                'deleted_at' => null,
            ],
            27 => [

                'district_id' => 48,
                'title' => 'Sarawal Rural Municipality',

                'created_at' => '2023-05-09 10:01:50',
                'updated_at' => '2023-05-09 10:01:50',
                'deleted_at' => null,
            ],
            28 => [

                'district_id' => 48,
                'title' => 'Susta Rural Municipality',

                'created_at' => '2023-05-09 10:02:01',
                'updated_at' => '2023-05-09 10:02:01',
                'deleted_at' => null,
            ],
            29 => [

                'district_id' => 48,
                'title' => 'Pratappur Rural Municipality',

                'created_at' => '2023-05-09 10:02:12',
                'updated_at' => '2023-05-09 10:02:12',
                'deleted_at' => null,
            ],
            30 => [

                'district_id' => 48,
                'title' => 'Palhi Nandan Rural Municipality',

                'created_at' => '2023-05-09 10:02:22',
                'updated_at' => '2023-05-09 10:02:22',
                'deleted_at' => null,
            ],
            31 => [

                'district_id' => 48,
                'title' => 'Bardaghat Municipality',

                'created_at' => '2023-05-09 10:02:35',
                'updated_at' => '2023-05-09 10:02:35',
                'deleted_at' => null,
            ],
            32 => [

                'district_id' => 48,
                'title' => 'Sunwal Municipality',

                'created_at' => '2023-05-09 10:02:45',
                'updated_at' => '2023-05-09 10:02:45',
                'deleted_at' => null,
            ],
            33 => [

                'district_id' => 48,
                'title' => 'Ramgram Municipality',

                'created_at' => '2023-05-09 10:02:56',
                'updated_at' => '2023-05-09 10:02:56',
                'deleted_at' => null,
            ],
            34 => [

                'district_id' => 49,
                'title' => 'Kanchan Rural Municipality',

                'created_at' => '2023-05-09 10:03:34',
                'updated_at' => '2023-05-09 10:03:34',
                'deleted_at' => null,
            ],
            35 => [

                'district_id' => 49,
                'title' => 'Siyari Rural Municipality',

                'created_at' => '2023-05-09 10:03:45',
                'updated_at' => '2023-05-09 10:03:45',
                'deleted_at' => null,
            ],
            36 => [

                'district_id' => 49,
                'title' => 'Rohini Rural Municipality',

                'created_at' => '2023-05-09 10:03:57',
                'updated_at' => '2023-05-09 10:03:57',
                'deleted_at' => null,
            ],
            37 => [

                'district_id' => 49,
                'title' => 'Gaidahawa Rural Municipality',

                'created_at' => '2023-05-09 10:04:07',
                'updated_at' => '2023-05-09 10:04:07',
                'deleted_at' => null,
            ],
            38 => [

                'district_id' => 49,
                'title' => 'Omsatiya Rural Municipality',

                'created_at' => '2023-05-09 10:04:37',
                'updated_at' => '2023-05-09 10:04:37',
                'deleted_at' => null,
            ],
            39 => [

                'district_id' => 49,
                'title' => 'Sudhdhodhan Rural Municipality',

                'created_at' => '2023-05-09 10:04:49',
                'updated_at' => '2023-05-09 10:04:49',
                'deleted_at' => null,
            ],
            40 => [

                'district_id' => 49,
                'title' => 'Mayadevi Rural Municipality',

                'created_at' => '2023-05-09 10:05:00',
                'updated_at' => '2023-05-09 10:05:00',
                'deleted_at' => null,
            ],
            41 => [

                'district_id' => 49,
                'title' => 'Marchawari Rural Municipality',

                'created_at' => '2023-05-09 10:05:12',
                'updated_at' => '2023-05-09 10:05:12',
                'deleted_at' => null,
            ],
            42 => [

                'district_id' => 49,
                'title' => 'Kotahimai Rural Municipality',

                'created_at' => '2023-05-09 10:05:23',
                'updated_at' => '2023-05-09 10:05:23',
                'deleted_at' => null,
            ],
            43 => [

                'district_id' => 49,
                'title' => 'Sammarimai Rural Municipality',

                'created_at' => '2023-05-09 10:05:35',
                'updated_at' => '2023-05-09 10:05:35',
                'deleted_at' => null,
            ],
            44 => [

                'district_id' => 49,
                'title' => 'Butwal Sub-Metropolitian City',

                'created_at' => '2023-05-09 10:05:46',
                'updated_at' => '2023-05-09 10:05:46',
                'deleted_at' => null,
            ],
            45 => [

                'district_id' => 49,
                'title' => 'Lumbini Sanskritik Municipality',

                'created_at' => '2023-05-09 10:05:57',
                'updated_at' => '2023-05-09 10:05:57',
                'deleted_at' => null,
            ],
            46 => [

                'district_id' => 49,
                'title' => 'Devdaha Municipality',

                'created_at' => '2023-05-09 10:06:07',
                'updated_at' => '2023-05-09 10:06:07',
                'deleted_at' => null,
            ],
            47 => [

                'district_id' => 49,
                'title' => 'Sainamaina Municipality',

                'created_at' => '2023-05-09 10:06:18',
                'updated_at' => '2023-05-09 10:06:18',
                'deleted_at' => null,
            ],
            48 => [

                'district_id' => 49,
                'title' => 'Siddharthanagar Municipality',

                'created_at' => '2023-05-09 10:06:28',
                'updated_at' => '2023-05-09 10:06:28',
                'deleted_at' => null,
            ],
            49 => [

                'district_id' => 49,
                'title' => 'Tillotama Municipality',

                'created_at' => '2023-05-09 10:06:38',
                'updated_at' => '2023-05-09 10:06:38',
                'deleted_at' => null,
            ],
            50 => [

                'district_id' => 47,
                'title' => 'Yashodhara Rural Municipality',

                'created_at' => '2023-05-09 10:09:48',
                'updated_at' => '2023-05-09 10:09:48',
                'deleted_at' => null,
            ],
            51 => [

                'district_id' => 47,
                'title' => 'Bijayanagar Rural Municipality',

                'created_at' => '2023-05-09 10:10:02',
                'updated_at' => '2023-05-09 10:10:02',
                'deleted_at' => null,
            ],
            52 => [

                'district_id' => 47,
                'title' => 'Mayadevi Rural Municipality',

                'created_at' => '2023-05-09 10:10:13',
                'updated_at' => '2023-05-09 10:10:13',
                'deleted_at' => null,
            ],
            53 => [

                'district_id' => 47,
                'title' => 'Suddhodhan Rural Municipality',

                'created_at' => '2023-05-09 10:10:23',
                'updated_at' => '2023-05-09 10:10:23',
                'deleted_at' => null,
            ],
            54 => [

                'district_id' => 47,
                'title' => 'Shivaraj Municipality',

                'created_at' => '2023-05-09 10:10:36',
                'updated_at' => '2023-05-09 10:10:36',
                'deleted_at' => null,
            ],
            55 => [

                'district_id' => 47,
                'title' => 'Kapilbastu Municipality',

                'created_at' => '2023-05-09 10:10:46',
                'updated_at' => '2023-05-09 10:10:46',
                'deleted_at' => null,
            ],
            56 => [

                'district_id' => 47,
                'title' => 'Buddhabhumi Municipality',

                'created_at' => '2023-05-09 10:10:57',
                'updated_at' => '2023-05-09 10:10:57',
                'deleted_at' => null,
            ],
            57 => [

                'district_id' => 47,
                'title' => 'Maharajgunj Municipality',

                'created_at' => '2023-05-09 10:11:08',
                'updated_at' => '2023-05-09 10:11:08',
                'deleted_at' => null,
            ],
            58 => [

                'district_id' => 47,
                'title' => 'Banganga Municipality',

                'created_at' => '2023-05-09 10:11:19',
                'updated_at' => '2023-05-09 10:11:19',
                'deleted_at' => null,
            ],
            59 => [

                'district_id' => 47,
                'title' => 'Krishnanagar Municipality',

                'created_at' => '2023-05-09 10:11:30',
                'updated_at' => '2023-05-09 10:11:30',
                'deleted_at' => null,
            ],
            60 => [

                'district_id' => 53,
                'title' => 'Babai Rural Municipality',

                'created_at' => '2023-05-09 10:12:14',
                'updated_at' => '2023-05-09 10:12:14',
                'deleted_at' => null,
            ],
            61 => [

                'district_id' => 53,
                'title' => 'Gadhawa Rural Municipality',

                'created_at' => '2023-05-09 10:12:24',
                'updated_at' => '2023-05-09 10:12:24',
                'deleted_at' => null,
            ],
            62 => [

                'district_id' => 53,
                'title' => 'Rapti Rural Municipality',

                'created_at' => '2023-05-09 10:12:35',
                'updated_at' => '2023-05-09 10:12:35',
                'deleted_at' => null,
            ],
            63 => [

                'district_id' => 53,
                'title' => 'Rajpur Rural Municipality',

                'created_at' => '2023-05-09 10:12:46',
                'updated_at' => '2023-05-09 10:12:46',
                'deleted_at' => null,
            ],
            64 => [

                'district_id' => 53,
                'title' => 'Dangisharan Rural Municipality',

                'created_at' => '2023-05-09 10:12:58',
                'updated_at' => '2023-05-09 10:12:58',
                'deleted_at' => null,
            ],
            65 => [

                'district_id' => 53,
                'title' => 'Shantinagar Rural Municipality',

                'created_at' => '2023-05-09 10:13:08',
                'updated_at' => '2023-05-09 10:13:08',
                'deleted_at' => null,
            ],
            66 => [

                'district_id' => 53,
                'title' => 'Banglachuli Rural Municipality',

                'created_at' => '2023-05-09 10:13:17',
                'updated_at' => '2023-05-09 10:13:17',
                'deleted_at' => null,
            ],
            67 => [

                'district_id' => 53,
                'title' => 'Tulsipur Sub-Metropolitian City',

                'created_at' => '2023-05-09 10:13:28',
                'updated_at' => '2023-05-09 10:13:28',
                'deleted_at' => null,
            ],
            68 => [

                'district_id' => 53,
                'title' => 'Ghorahi Sub-Metropolitian City',

                'created_at' => '2023-05-09 10:13:38',
                'updated_at' => '2023-05-09 10:13:38',
                'deleted_at' => null,
            ],
            69 => [

                'district_id' => 53,
                'title' => 'Lamahi Municipality',

                'created_at' => '2023-05-09 10:13:49',
                'updated_at' => '2023-05-09 10:13:49',
                'deleted_at' => null,
            ],
            70 => [

                'district_id' => 57,
                'title' => 'Khajura Rural Municipality',

                'created_at' => '2023-05-09 10:14:28',
                'updated_at' => '2023-05-09 10:14:28',
                'deleted_at' => null,
            ],
            71 => [

                'district_id' => 57,
                'title' => 'Janki Rural Municipality',

                'created_at' => '2023-05-09 10:14:39',
                'updated_at' => '2023-05-09 10:14:39',
                'deleted_at' => null,
            ],
            72 => [

                'district_id' => 57,
                'title' => 'Baijanath Rural Municipality',

                'created_at' => '2023-05-09 10:14:51',
                'updated_at' => '2023-05-09 10:14:51',
                'deleted_at' => null,
            ],
            73 => [

                'district_id' => 57,
                'title' => 'Duduwa Rural Municipality',

                'created_at' => '2023-05-09 10:15:02',
                'updated_at' => '2023-05-09 10:15:02',
                'deleted_at' => null,
            ],
            74 => [

                'district_id' => 57,
                'title' => 'Narainapur Rural Municipality',

                'created_at' => '2023-05-09 10:15:13',
                'updated_at' => '2023-05-09 10:15:13',
                'deleted_at' => null,
            ],
            75 => [

                'district_id' => 57,
                'title' => 'Rapti Sonari Rural Municipality',

                'created_at' => '2023-05-09 10:15:24',
                'updated_at' => '2023-05-09 10:15:24',
                'deleted_at' => null,
            ],
            76 => [

                'district_id' => 57,
                'title' => 'Kohalpur Municipality',

                'created_at' => '2023-05-09 10:15:37',
                'updated_at' => '2023-05-09 10:15:37',
                'deleted_at' => null,
            ],
            77 => [

                'district_id' => 57,
                'title' => 'Nepalgunj Sub-Metropolitian City',

                'created_at' => '2023-05-09 10:15:48',
                'updated_at' => '2023-05-09 10:15:48',
                'deleted_at' => null,
            ],
            78 => [

                'district_id' => 58,
                'title' => 'Geruwa Rural Municipality',

                'created_at' => '2023-05-09 10:16:14',
                'updated_at' => '2023-05-09 10:16:14',
                'deleted_at' => null,
            ],
            79 => [

                'district_id' => 58,
                'title' => 'Badhaiyatal Rural Municipality',

                'created_at' => '2023-05-09 10:16:26',
                'updated_at' => '2023-05-09 10:16:26',
                'deleted_at' => null,
            ],
            80 => [

                'district_id' => 58,
                'title' => 'Thakurbaba Municipality',

                'created_at' => '2023-05-09 10:16:38',
                'updated_at' => '2023-05-09 10:16:38',
                'deleted_at' => null,
            ],
            81 => [

                'district_id' => 58,
                'title' => 'Bansagadhi Municipality',

                'created_at' => '2023-05-09 10:16:51',
                'updated_at' => '2023-05-09 10:16:51',
                'deleted_at' => null,
            ],
            82 => [

                'district_id' => 58,
                'title' => 'Barbardiya Municipality',

                'created_at' => '2023-05-09 10:17:03',
                'updated_at' => '2023-05-09 10:17:03',
                'deleted_at' => null,
            ],
            83 => [

                'district_id' => 58,
                'title' => 'Rajapur Municipality',

                'created_at' => '2023-05-09 10:17:16',
                'updated_at' => '2023-05-09 10:17:16',
                'deleted_at' => null,
            ],
            84 => [

                'district_id' => 58,
                'title' => 'Madhuwan Municipality',

                'created_at' => '2023-05-09 10:17:27',
                'updated_at' => '2023-05-09 10:17:27',
                'deleted_at' => null,
            ],
            85 => [

                'district_id' => 58,
                'title' => 'Gulariya Municipality',

                'created_at' => '2023-05-09 10:17:39',
                'updated_at' => '2023-05-09 10:17:39',
                'deleted_at' => null,
            ],
            86 => [

                'district_id' => 68,
                'title' => 'Kuse Rural Municipality',

                'created_at' => '2023-05-09 10:23:23',
                'updated_at' => '2023-05-09 10:23:23',
                'deleted_at' => null,
            ],
            87 => [

                'district_id' => 68,
                'title' => 'Shiwalaya Rural Municipality',

                'created_at' => '2023-05-09 10:23:34',
                'updated_at' => '2023-05-09 10:23:34',
                'deleted_at' => null,
            ],
            88 => [

                'district_id' => 68,
                'title' => 'Barekot Rural Municipality',

                'created_at' => '2023-05-09 10:23:45',
                'updated_at' => '2023-05-09 10:23:45',
                'deleted_at' => null,
            ],
            89 => [

                'district_id' => 68,
                'title' => 'Junichande Rural Municipality',

                'created_at' => '2023-05-09 10:23:57',
                'updated_at' => '2023-05-09 10:23:57',
                'deleted_at' => null,
            ],
            90 => [

                'district_id' => 68,
                'title' => 'Nalagad Municipality',

                'created_at' => '2023-05-09 10:24:08',
                'updated_at' => '2023-05-09 10:24:08',
                'deleted_at' => null,
            ],
            91 => [

                'district_id' => 68,
                'title' => 'Bheri Municipality',

                'created_at' => '2023-05-09 10:24:20',
                'updated_at' => '2023-05-09 10:24:20',
                'deleted_at' => null,
            ],
            92 => [

                'district_id' => 68,
                'title' => 'Chhedagad Municipality',

                'created_at' => '2023-05-09 10:24:31',
                'updated_at' => '2023-05-09 10:24:31',
                'deleted_at' => null,
            ],
            93 => [

                'district_id' => 61,
                'title' => 'Kaike Rural Municipality',

                'created_at' => '2023-05-09 10:25:11',
                'updated_at' => '2023-05-09 10:25:11',
                'deleted_at' => null,
            ],
            94 => [

                'district_id' => 61,
                'title' => 'Jagadulla Rural Municipality',

                'created_at' => '2023-05-09 10:25:23',
                'updated_at' => '2023-05-09 10:25:23',
                'deleted_at' => null,
            ],
            95 => [

                'district_id' => 61,
                'title' => 'Mudkechula Rural Municipality',

                'created_at' => '2023-05-09 10:25:35',
                'updated_at' => '2023-05-09 10:25:35',
                'deleted_at' => null,
            ],
            96 => [

                'district_id' => 61,
                'title' => 'Dolpo Buddha Rural Municipality',

                'created_at' => '2023-05-09 10:25:46',
                'updated_at' => '2023-05-09 10:25:46',
                'deleted_at' => null,
            ],
            97 => [

                'district_id' => 61,
                'title' => 'Shey Phoksundo Rural Municipality',

                'created_at' => '2023-05-09 10:25:57',
                'updated_at' => '2023-05-09 10:25:57',
                'deleted_at' => null,
            ],
            98 => [

                'district_id' => 61,
                'title' => 'Chharka Tangsong Rural Municipality',

                'created_at' => '2023-05-09 10:26:08',
                'updated_at' => '2023-05-09 10:26:08',
                'deleted_at' => null,
            ],
            99 => [

                'district_id' => 61,
                'title' => 'Tripurasundari Municipality',

                'created_at' => '2023-05-09 10:26:19',
                'updated_at' => '2023-05-09 10:26:19',
                'deleted_at' => null,
            ],
            100 => [

                'district_id' => 61,
                'title' => 'Thuli Bheri Municipality',

                'created_at' => '2023-05-09 10:26:31',
                'updated_at' => '2023-05-09 10:26:31',
                'deleted_at' => null,
            ],
            101 => [

                'district_id' => 65,
                'title' => 'Soru Rural Municipality',

                'created_at' => '2023-05-09 10:27:04',
                'updated_at' => '2023-05-09 10:27:04',
                'deleted_at' => null,
            ],
            102 => [

                'district_id' => 65,
                'title' => 'Khatyad Rural Municipality',

                'created_at' => '2023-05-09 10:27:16',
                'updated_at' => '2023-05-09 10:27:16',
                'deleted_at' => null,
            ],
            103 => [

                'district_id' => 65,
                'title' => 'Mugum Karmarong Rural Municipality',

                'created_at' => '2023-05-09 10:27:27',
                'updated_at' => '2023-05-09 10:27:27',
                'deleted_at' => null,
            ],
            104 => [

                'district_id' => 65,
                'title' => 'Chhayanath Rara Municipality',

                'created_at' => '2023-05-09 10:27:41',
                'updated_at' => '2023-05-09 10:27:41',
                'deleted_at' => null,
            ],
            105 => [

                'district_id' => 62,
                'title' => 'Simkot Rural Municipality',

                'created_at' => '2023-05-09 10:28:13',
                'updated_at' => '2023-05-09 10:28:13',
                'deleted_at' => null,
            ],
            106 => [

                'district_id' => 62,
                'title' => 'Namkha Rural Municipality',

                'created_at' => '2023-05-09 10:28:24',
                'updated_at' => '2023-05-09 10:28:24',
                'deleted_at' => null,
            ],
            107 => [

                'district_id' => 62,
                'title' => 'Chankheli Rural Municipality',

                'created_at' => '2023-05-09 10:28:35',
                'updated_at' => '2023-05-09 10:28:35',
                'deleted_at' => null,
            ],
            108 => [

                'district_id' => 62,
                'title' => 'Tanjakot Rural Municipality',

                'created_at' => '2023-05-09 10:28:47',
                'updated_at' => '2023-05-09 10:28:47',
                'deleted_at' => null,
            ],
            109 => [

                'district_id' => 62,
                'title' => 'Sarkegad Rural Municipality',

                'created_at' => '2023-05-09 10:28:58',
                'updated_at' => '2023-05-09 10:28:58',
                'deleted_at' => null,
            ],
            110 => [

                'district_id' => 62,
                'title' => 'Adanchuli Rural Municipality',

                'created_at' => '2023-05-09 10:29:10',
                'updated_at' => '2023-05-09 10:29:10',
                'deleted_at' => null,
            ],
            111 => [

                'district_id' => 62,
                'title' => 'Kharpunath Rural Municipality',

                'created_at' => '2023-05-09 10:29:22',
                'updated_at' => '2023-05-09 10:29:22',
                'deleted_at' => null,
            ],
            112 => [

                'district_id' => 63,
                'title' => 'Hima Rural Municipality',

                'created_at' => '2023-05-09 10:29:53',
                'updated_at' => '2023-05-09 10:29:53',
                'deleted_at' => null,
            ],
            113 => [

                'district_id' => 63,
                'title' => 'Tila Rural Municipality',

                'created_at' => '2023-05-09 10:30:06',
                'updated_at' => '2023-05-09 10:30:06',
                'deleted_at' => null,
            ],
            114 => [

                'district_id' => 63,
                'title' => 'Sinja Rural Municipality',

                'created_at' => '2023-05-09 10:30:18',
                'updated_at' => '2023-05-09 10:30:18',
                'deleted_at' => null,
            ],
            115 => [

                'district_id' => 63,
                'title' => 'Guthichaur Rural Municipality',

                'created_at' => '2023-05-09 10:30:29',
                'updated_at' => '2023-05-09 10:30:29',
                'deleted_at' => null,
            ],
            116 => [

                'district_id' => 63,
                'title' => 'Tatopani Rural Municipality',

                'created_at' => '2023-05-09 10:30:42',
                'updated_at' => '2023-05-09 10:30:42',
                'deleted_at' => null,
            ],
            117 => [

                'district_id' => 63,
                'title' => 'Patrasi Rural Municipality',

                'created_at' => '2023-05-09 10:30:53',
                'updated_at' => '2023-05-09 10:30:53',
                'deleted_at' => null,
            ],
            118 => [

                'district_id' => 63,
                'title' => 'Kanakasundari Rural Municipality',

                'created_at' => '2023-05-09 10:31:04',
                'updated_at' => '2023-05-09 10:31:04',
                'deleted_at' => null,
            ],
            119 => [

                'district_id' => 63,
                'title' => 'Chandannath Municipality',

                'created_at' => '2023-05-09 10:31:16',
                'updated_at' => '2023-05-09 10:31:16',
                'deleted_at' => null,
            ],
            120 => [

                'district_id' => 64,
                'title' => 'Mahawai Rural Municipality',

                'created_at' => '2023-05-09 10:31:56',
                'updated_at' => '2023-05-09 10:31:56',
                'deleted_at' => null,
            ],
            121 => [

                'district_id' => 64,
                'title' => 'Palata Rural Municipality',

                'created_at' => '2023-05-09 10:32:07',
                'updated_at' => '2023-05-09 10:32:07',
                'deleted_at' => null,
            ],
            122 => [

                'district_id' => 64,
                'title' => 'Naraharinath Rural Municipality',

                'created_at' => '2023-05-09 10:32:19',
                'updated_at' => '2023-05-09 10:32:19',
                'deleted_at' => null,
            ],
            123 => [

                'district_id' => 64,
                'title' => 'Pachaljharana Rural Municipality',

                'created_at' => '2023-05-09 10:32:30',
                'updated_at' => '2023-05-09 10:32:30',
                'deleted_at' => null,
            ],
            124 => [

                'district_id' => 64,
                'title' => 'Subha Kalika Rural Municipality',

                'created_at' => '2023-05-09 10:32:41',
                'updated_at' => '2023-05-09 10:32:41',
                'deleted_at' => null,
            ],
            125 => [

                'district_id' => 64,
                'title' => 'Sanni Tribeni Rural Municipality',

                'created_at' => '2023-05-09 10:32:53',
                'updated_at' => '2023-05-09 10:32:53',
                'deleted_at' => null,
            ],
            126 => [

                'district_id' => 64,
                'title' => 'Khandachakra Municipality',

                'created_at' => '2023-05-09 10:33:05',
                'updated_at' => '2023-05-09 10:33:05',
                'deleted_at' => null,
            ],
            127 => [

                'district_id' => 64,
                'title' => 'Raskot Municipality',

                'created_at' => '2023-05-09 10:33:16',
                'updated_at' => '2023-05-09 10:33:16',
                'deleted_at' => null,
            ],
            128 => [

                'district_id' => 64,
                'title' => 'Tilagufa Municipality',

                'created_at' => '2023-05-09 10:33:27',
                'updated_at' => '2023-05-09 10:33:27',
                'deleted_at' => null,
            ],
            129 => [

                'district_id' => 67,
                'title' => 'Bhairabi Rural Municipality',

                'created_at' => '2023-05-09 12:05:39',
                'updated_at' => '2023-05-09 12:05:39',
                'deleted_at' => null,
            ],
            130 => [

                'district_id' => 67,
                'title' => 'Mahabu Rural Municipality',

                'created_at' => '2023-05-09 12:05:54',
                'updated_at' => '2023-05-09 12:05:54',
                'deleted_at' => null,
            ],
            131 => [

                'district_id' => 67,
                'title' => 'Gurans Rural Municipality',

                'created_at' => '2023-05-09 12:06:18',
                'updated_at' => '2023-05-09 12:06:18',
                'deleted_at' => null,
            ],
            132 => [

                'district_id' => 67,
                'title' => 'Naumule Rural Municipality',

                'created_at' => '2023-05-09 12:06:30',
                'updated_at' => '2023-05-09 12:06:30',
                'deleted_at' => null,
            ],
            133 => [

                'district_id' => 67,
                'title' => 'Bhagawatimai Rural Municipality',

                'created_at' => '2023-05-09 12:06:41',
                'updated_at' => '2023-05-09 12:06:41',
                'deleted_at' => null,
            ],
            134 => [

                'district_id' => 67,
                'title' => 'Thantikandh Rural Municipality',

                'created_at' => '2023-05-09 12:06:53',
                'updated_at' => '2023-05-09 12:06:53',
                'deleted_at' => null,
            ],
            135 => [

                'district_id' => 67,
                'title' => 'Dungeshwor Rural Municipality',

                'created_at' => '2023-05-09 12:07:03',
                'updated_at' => '2023-05-09 12:07:03',
                'deleted_at' => null,
            ],
            136 => [

                'district_id' => 67,
                'title' => 'Aathabis Municipality',

                'created_at' => '2023-05-09 12:07:15',
                'updated_at' => '2023-05-09 12:07:15',
                'deleted_at' => null,
            ],
            137 => [

                'district_id' => 67,
                'title' => 'Dullu Municipality',

                'created_at' => '2023-05-09 12:07:27',
                'updated_at' => '2023-05-09 12:07:27',
                'deleted_at' => null,
            ],
            138 => [

                'district_id' => 67,
                'title' => 'Chamunda Bindrasaini Municipality',

                'created_at' => '2023-05-09 12:07:38',
                'updated_at' => '2023-05-09 12:07:38',
                'deleted_at' => null,
            ],
            139 => [

                'district_id' => 67,
                'title' => 'Narayan Municipality',

                'created_at' => '2023-05-09 12:07:50',
                'updated_at' => '2023-05-09 12:07:50',
                'deleted_at' => null,
            ],
            140 => [

                'district_id' => 59,
                'title' => 'Tribeni Rural Municipality',

                'created_at' => '2023-05-09 12:08:39',
                'updated_at' => '2023-05-09 12:08:39',
                'deleted_at' => null,
            ],
            141 => [

                'district_id' => 59,
                'title' => 'Sani Bheri Rural Municipality',

                'created_at' => '2023-05-09 12:08:51',
                'updated_at' => '2023-05-09 12:08:51',
                'deleted_at' => null,
            ],
            142 => [

                'district_id' => 59,
                'title' => 'Banfikot Rural Municipality',

                'created_at' => '2023-05-09 12:09:04',
                'updated_at' => '2023-05-09 12:09:04',
                'deleted_at' => null,
            ],
            143 => [

                'district_id' => 59,
                'title' => 'Aathbiskot Municipality',

                'created_at' => '2023-05-09 12:09:15',
                'updated_at' => '2023-05-09 12:09:15',
                'deleted_at' => null,
            ],
            144 => [

                'district_id' => 59,
                'title' => 'Chaurjahari Municipality',

                'created_at' => '2023-05-09 12:09:27',
                'updated_at' => '2023-05-09 12:09:27',
                'deleted_at' => null,
            ],
            145 => [

                'district_id' => 59,
                'title' => 'Musikot Municipality',

                'created_at' => '2023-05-09 12:09:39',
                'updated_at' => '2023-05-09 12:09:39',
                'deleted_at' => null,
            ],
            146 => [

                'district_id' => 60,
                'title' => 'Kumakh Rural Municipality',

                'created_at' => '2023-05-09 12:10:15',
                'updated_at' => '2023-05-09 12:10:15',
                'deleted_at' => null,
            ],
            147 => [

                'district_id' => 60,
                'title' => 'Darma Rural Municipality',

                'created_at' => '2023-05-09 12:10:29',
                'updated_at' => '2023-05-09 12:10:29',
                'deleted_at' => null,
            ],
            148 => [

                'district_id' => 60,
                'title' => 'Kapurkot Rural Municipality',

                'created_at' => '2023-05-09 12:10:40',
                'updated_at' => '2023-05-09 12:10:40',
                'deleted_at' => null,
            ],
            149 => [

                'district_id' => 60,
                'title' => 'Kalimati Rural Municipality',

                'created_at' => '2023-05-09 12:10:51',
                'updated_at' => '2023-05-09 12:10:51',
                'deleted_at' => null,
            ],
            150 => [

                'district_id' => 60,
                'title' => 'Tribeni Rural Municipality',

                'created_at' => '2023-05-09 12:11:03',
                'updated_at' => '2023-05-09 12:11:03',
                'deleted_at' => null,
            ],
            151 => [

                'district_id' => 60,
                'title' => 'Chhatreshwori Rural Municipality',

                'created_at' => '2023-05-09 12:11:14',
                'updated_at' => '2023-05-09 12:11:14',
                'deleted_at' => null,
            ],
            152 => [

                'district_id' => 60,
                'title' => 'Siddha Kumakh Rural Municipality',

                'created_at' => '2023-05-09 12:11:25',
                'updated_at' => '2023-05-09 12:11:25',
                'deleted_at' => null,
            ],
            153 => [

                'district_id' => 60,
                'title' => 'Sharada Municipality',

                'created_at' => '2023-05-09 12:11:36',
                'updated_at' => '2023-05-09 12:11:36',
                'deleted_at' => null,
            ],
            154 => [

                'district_id' => 60,
                'title' => 'Bangad Kupinde Municipality',

                'created_at' => '2023-05-09 12:11:47',
                'updated_at' => '2023-05-09 12:11:47',
                'deleted_at' => null,
            ],
            155 => [

                'district_id' => 60,
                'title' => 'Bagchaur Municipality',

                'created_at' => '2023-05-09 12:11:58',
                'updated_at' => '2023-05-09 12:11:58',
                'deleted_at' => null,
            ],
            156 => [

                'district_id' => 66,
                'title' => 'Chaukune Rural Municipality',

                'created_at' => '2023-05-09 12:12:21',
                'updated_at' => '2023-05-09 12:12:21',
                'deleted_at' => null,
            ],
            157 => [

                'district_id' => 66,
                'title' => 'Simta Rural Municipality',

                'created_at' => '2023-05-09 12:12:32',
                'updated_at' => '2023-05-09 12:12:32',
                'deleted_at' => null,
            ],
            158 => [

                'district_id' => 66,
                'title' => 'Chingad Rural Municipality',

                'created_at' => '2023-05-09 12:12:44',
                'updated_at' => '2023-05-09 12:12:44',
                'deleted_at' => null,
            ],
            159 => [

                'district_id' => 66,
                'title' => 'Barahtal Rural Municipality',

                'created_at' => '2023-05-09 12:12:56',
                'updated_at' => '2023-05-09 12:12:56',
                'deleted_at' => null,
            ],
            160 => [

                'district_id' => 66,
                'title' => 'Gurbhakot Municipality',

                'created_at' => '2023-05-09 12:13:07',
                'updated_at' => '2023-05-09 12:13:07',
                'deleted_at' => null,
            ],
            161 => [

                'district_id' => 66,
                'title' => 'Panchpuri Municipality',

                'created_at' => '2023-05-09 12:13:19',
                'updated_at' => '2023-05-09 12:13:19',
                'deleted_at' => null,
            ],
            162 => [

                'district_id' => 66,
                'title' => 'Bheriganga Municipality',

                'created_at' => '2023-05-09 12:13:31',
                'updated_at' => '2023-05-09 12:13:31',
                'deleted_at' => null,
            ],
            163 => [

                'district_id' => 66,
                'title' => 'Lekbeshi Municipality',

                'created_at' => '2023-05-09 12:13:43',
                'updated_at' => '2023-05-09 12:13:43',
                'deleted_at' => null,
            ],
            164 => [

                'district_id' => 66,
                'title' => 'Birendranagar Municipality',

                'created_at' => '2023-05-09 12:13:54',
                'updated_at' => '2023-05-09 12:13:54',
                'deleted_at' => null,
            ],
            165 => [

                'district_id' => 73,
                'title' => 'Gaumul Rural Municipality',

                'created_at' => '2023-05-09 12:14:55',
                'updated_at' => '2023-05-09 12:14:55',
                'deleted_at' => null,
            ],
            166 => [

                'district_id' => 73,
                'title' => 'Himali Rural Municipality',

                'created_at' => '2023-05-09 12:15:06',
                'updated_at' => '2023-05-09 12:15:06',
                'deleted_at' => null,
            ],
            167 => [

                'district_id' => 73,
                'title' => 'Jagannath Rural Municipality',

                'created_at' => '2023-05-09 12:15:19',
                'updated_at' => '2023-05-09 12:15:19',
                'deleted_at' => null,
            ],
            168 => [

                'district_id' => 73,
                'title' => 'Khaptad Chhededaha Rural Municipality',

                'created_at' => '2023-05-09 12:15:31',
                'updated_at' => '2023-05-09 12:15:31',
                'deleted_at' => null,
            ],
            169 => [

                'district_id' => 73,
                'title' => 'Swami Kartik Khaapar Rural Municipality',

                'created_at' => '2023-05-09 12:15:47',
                'updated_at' => '2023-05-09 12:15:47',
                'deleted_at' => null,
            ],
            170 => [

                'district_id' => 73,
                'title' => 'Badimalika Municipality',

                'created_at' => '2023-05-09 12:16:07',
                'updated_at' => '2023-05-09 12:16:07',
                'deleted_at' => null,
            ],
            171 => [

                'district_id' => 73,
                'title' => 'Tribeni Municipality',

                'created_at' => '2023-05-09 12:16:24',
                'updated_at' => '2023-05-09 12:16:24',
                'deleted_at' => null,
            ],
            172 => [

                'district_id' => 73,
                'title' => 'Budhiganga Municipality',

                'created_at' => '2023-05-09 12:16:37',
                'updated_at' => '2023-05-09 12:16:37',
                'deleted_at' => null,
            ],
            173 => [

                'district_id' => 73,
                'title' => 'Budhinanda Municipality',

                'created_at' => '2023-05-09 12:16:50',
                'updated_at' => '2023-05-09 12:16:50',
                'deleted_at' => null,
            ],
            174 => [

                'district_id' => 72,
                'title' => 'Masta Rural Municipality',

                'created_at' => '2023-05-09 12:17:33',
                'updated_at' => '2023-05-09 12:17:33',
                'deleted_at' => null,
            ],
            175 => [

                'district_id' => 72,
                'title' => 'Thalara Rural Municipality',

                'created_at' => '2023-05-09 12:17:45',
                'updated_at' => '2023-05-09 12:17:45',
                'deleted_at' => null,
            ],
            176 => [

                'district_id' => 72,
                'title' => 'Talkot Rural Municipality',

                'created_at' => '2023-05-09 12:17:57',
                'updated_at' => '2023-05-09 12:17:57',
                'deleted_at' => null,
            ],
            177 => [

                'district_id' => 72,
                'title' => 'Surma Rural Municipality',

                'created_at' => '2023-05-09 12:18:09',
                'updated_at' => '2023-05-09 12:18:09',
                'deleted_at' => null,
            ],
            178 => [

                'district_id' => 72,
                'title' => 'SaiPaal Rural Municipality',

                'created_at' => '2023-05-09 12:18:27',
                'updated_at' => '2023-05-09 12:18:27',
                'deleted_at' => null,
            ],
            179 => [

                'district_id' => 72,
                'title' => 'Durgathali Rural Municipality',

                'created_at' => '2023-05-09 12:18:41',
                'updated_at' => '2023-05-09 12:18:41',
                'deleted_at' => null,
            ],
            180 => [

                'district_id' => 72,
                'title' => 'Bithadchir Rural Municipality',

                'created_at' => '2023-05-09 12:18:57',
                'updated_at' => '2023-05-09 12:18:57',
                'deleted_at' => null,
            ],
            181 => [

                'district_id' => 72,
                'title' => 'Kedarseu Rural Municipality',

                'created_at' => '2023-05-09 12:19:11',
                'updated_at' => '2023-05-09 12:19:11',
                'deleted_at' => null,
            ],
            182 => [

                'district_id' => 72,
                'title' => 'Khaptadchhanna Rural Municipality',

                'created_at' => '2023-05-09 12:19:22',
                'updated_at' => '2023-05-09 12:19:22',
                'deleted_at' => null,
            ],
            183 => [

                'district_id' => 72,
                'title' => 'Chabispathivera Rural Municipality',

                'created_at' => '2023-05-09 12:19:34',
                'updated_at' => '2023-05-09 12:19:34',
                'deleted_at' => null,
            ],
            184 => [

                'district_id' => 72,
                'title' => 'JayaPrithivi Municipality',

                'created_at' => '2023-05-09 12:19:46',
                'updated_at' => '2023-05-09 12:19:46',
                'deleted_at' => null,
            ],
            185 => [

                'district_id' => 72,
                'title' => 'Bungal Municipality',

                'created_at' => '2023-05-09 12:19:59',
                'updated_at' => '2023-05-09 12:19:59',
                'deleted_at' => null,
            ],
            186 => [

                'district_id' => 77,
                'title' => 'Lekam Rural Municipality',

                'created_at' => '2023-05-09 12:20:37',
                'updated_at' => '2023-05-09 12:20:37',
                'deleted_at' => null,
            ],
            187 => [

                'district_id' => 77,
                'title' => 'Naugad Rural Municipality',

                'created_at' => '2023-05-09 12:20:49',
                'updated_at' => '2023-05-09 12:20:49',
                'deleted_at' => null,
            ],
            188 => [

                'district_id' => 77,
                'title' => 'Byas Rural Municipality',

                'created_at' => '2023-05-09 12:21:00',
                'updated_at' => '2023-05-09 12:21:00',
                'deleted_at' => null,
            ],
            189 => [

                'district_id' => 77,
                'title' => 'Dunhu Rural Municipality',

                'created_at' => '2023-05-09 12:21:11',
                'updated_at' => '2023-05-09 12:21:11',
                'deleted_at' => null,
            ],
            190 => [

                'district_id' => 77,
                'title' => 'Marma Rural Municipality',

                'created_at' => '2023-05-09 12:21:22',
                'updated_at' => '2023-05-09 12:21:22',
                'deleted_at' => null,
            ],
            191 => [

                'district_id' => 77,
                'title' => 'Apihimal Rural Municipality',

                'created_at' => '2023-05-09 12:21:32',
                'updated_at' => '2023-05-09 12:21:32',
                'deleted_at' => null,
            ],
            192 => [

                'district_id' => 77,
                'title' => 'Malikaarjun Rural Municipality',

                'created_at' => '2023-05-09 12:21:43',
                'updated_at' => '2023-05-09 12:21:43',
                'deleted_at' => null,
            ],
            193 => [

                'district_id' => 77,
                'title' => 'Mahakali Municipality',

                'created_at' => '2023-05-09 12:21:54',
                'updated_at' => '2023-05-09 12:21:54',
                'deleted_at' => null,
            ],
            194 => [

                'district_id' => 77,
                'title' => 'Shailyashikhar Municipality',

                'created_at' => '2023-05-09 12:22:06',
                'updated_at' => '2023-05-09 12:22:06',
                'deleted_at' => null,
            ],
            195 => [

                'district_id' => 76,
                'title' => 'Sigas Rural Municipality',

                'created_at' => '2023-05-09 12:22:47',
                'updated_at' => '2023-05-09 12:22:47',
                'deleted_at' => null,
            ],
            196 => [

                'district_id' => 76,
                'title' => 'Shivanath Rural Municipality',

                'created_at' => '2023-05-09 12:23:02',
                'updated_at' => '2023-05-09 12:23:02',
                'deleted_at' => null,
            ],
            197 => [

                'district_id' => 76,
                'title' => 'Surnaya Rural Municipality',

                'created_at' => '2023-05-09 12:26:29',
                'updated_at' => '2023-05-09 12:26:29',
                'deleted_at' => null,
            ],
            198 => [

                'district_id' => 76,
                'title' => 'Dilasaini Rural Municipality',

                'created_at' => '2023-05-09 12:26:41',
                'updated_at' => '2023-05-09 12:26:41',
                'deleted_at' => null,
            ],
            199 => [

                'district_id' => 76,
                'title' => 'Pancheshwar Rural Municipality',

                'created_at' => '2023-05-09 12:26:54',
                'updated_at' => '2023-05-09 12:26:54',
                'deleted_at' => null,
            ],
            200 => [

                'district_id' => 76,
                'title' => 'Dogadakedar Rural Municipality',

                'created_at' => '2023-05-09 12:27:06',
                'updated_at' => '2023-05-09 12:27:06',
                'deleted_at' => null,
            ],
            201 => [

                'district_id' => 76,
                'title' => 'Melauli Municipality',

                'created_at' => '2023-05-09 12:27:18',
                'updated_at' => '2023-05-09 12:27:18',
                'deleted_at' => null,
            ],
            202 => [

                'district_id' => 76,
                'title' => 'Dasharathchanda Municipality',

                'created_at' => '2023-05-09 12:27:30',
                'updated_at' => '2023-05-09 12:27:30',
                'deleted_at' => null,
            ],
            203 => [

                'district_id' => 76,
                'title' => 'Purchaudi Municipality',

                'created_at' => '2023-05-09 12:27:43',
                'updated_at' => '2023-05-09 12:27:43',
                'deleted_at' => null,
            ],
            204 => [

                'district_id' => 76,
                'title' => 'Patan Municipality',

                'created_at' => '2023-05-09 12:27:55',
                'updated_at' => '2023-05-09 12:27:55',
                'deleted_at' => null,
            ],
            205 => [

                'district_id' => 75,
                'title' => 'Alital Rural Municipality',

                'created_at' => '2023-05-09 12:28:29',
                'updated_at' => '2023-05-09 12:28:29',
                'deleted_at' => null,
            ],
            206 => [

                'district_id' => 75,
                'title' => 'Ajaymeru Rural Municipality',

                'created_at' => '2023-05-09 12:28:41',
                'updated_at' => '2023-05-09 12:28:41',
                'deleted_at' => null,
            ],
            207 => [

                'district_id' => 75,
                'title' => 'Bhageshwar Rural Municipality',

                'created_at' => '2023-05-09 12:28:52',
                'updated_at' => '2023-05-09 12:28:52',
                'deleted_at' => null,
            ],
            208 => [

                'district_id' => 75,
                'title' => 'Nawadurga Rural Municipality',

                'created_at' => '2023-05-09 12:29:02',
                'updated_at' => '2023-05-09 12:29:02',
                'deleted_at' => null,
            ],
            209 => [

                'district_id' => 75,
                'title' => 'Ganayapdhura Rural Municipality',

                'created_at' => '2023-05-09 12:29:13',
                'updated_at' => '2023-05-09 12:29:13',
                'deleted_at' => null,
            ],
            210 => [

                'district_id' => 75,
                'title' => 'Amargadhi Municipality',

                'created_at' => '2023-05-09 12:29:24',
                'updated_at' => '2023-05-09 12:29:24',
                'deleted_at' => null,
            ],
            211 => [

                'district_id' => 75,
                'title' => 'Parashuram Municipality',

                'created_at' => '2023-05-09 12:29:36',
                'updated_at' => '2023-05-09 12:29:36',
                'deleted_at' => null,
            ],
            212 => [

                'district_id' => 71,
                'title' => 'Sayal Rural Municipality',

                'created_at' => '2023-05-09 12:30:05',
                'updated_at' => '2023-05-09 12:30:05',
                'deleted_at' => null,
            ],
            213 => [

                'district_id' => 71,
                'title' => 'Adharsha Rural Municipality',

                'created_at' => '2023-05-09 12:30:18',
                'updated_at' => '2023-05-09 12:30:18',
                'deleted_at' => null,
            ],
            214 => [

                'district_id' => 71,
                'title' => 'Jorayal Rural Municipality',

                'created_at' => '2023-05-09 12:30:33',
                'updated_at' => '2023-05-09 12:30:33',
                'deleted_at' => null,
            ],
            215 => [

                'district_id' => 71,
                'title' => 'Badikedar Rural Municipality',

                'created_at' => '2023-05-09 12:30:45',
                'updated_at' => '2023-05-09 12:30:45',
                'deleted_at' => null,
            ],
            216 => [

                'district_id' => 71,
                'title' => 'Purbichauki Rural Municipality',

                'created_at' => '2023-05-09 12:30:57',
                'updated_at' => '2023-05-09 12:30:57',
                'deleted_at' => null,
            ],
            217 => [

                'district_id' => 71,
                'title' => 'K I Singh Rural Municipality',

                'created_at' => '2023-05-09 12:31:09',
                'updated_at' => '2023-05-09 12:31:09',
                'deleted_at' => null,
            ],
            218 => [

                'district_id' => 71,
                'title' => 'Bogtan Foodsil Rural Municipality',

                'created_at' => '2023-05-09 12:31:23',
                'updated_at' => '2023-05-09 12:31:23',
                'deleted_at' => null,
            ],
            219 => [

                'district_id' => 71,
                'title' => 'Dipayal Silgadi Municipality',

                'created_at' => '2023-05-09 12:31:35',
                'updated_at' => '2023-05-09 12:31:35',
                'deleted_at' => null,
            ],
            220 => [

                'district_id' => 71,
                'title' => 'Shikhar Municipality',

                'created_at' => '2023-05-09 12:31:47',
                'updated_at' => '2023-05-09 12:31:47',
                'deleted_at' => null,
            ],
            221 => [

                'district_id' => 70,
                'title' => 'Dhakari Rural Municipality',

                'created_at' => '2023-05-09 12:32:19',
                'updated_at' => '2023-05-09 12:32:19',
                'deleted_at' => null,
            ],
            222 => [

                'district_id' => 70,
                'title' => 'Mellekh Rural Municipality',

                'created_at' => '2023-05-09 12:32:32',
                'updated_at' => '2023-05-09 12:32:32',
                'deleted_at' => null,
            ],
            223 => [

                'district_id' => 70,
                'title' => 'Chaurpati Rural Municipality',

                'created_at' => '2023-05-09 12:32:45',
                'updated_at' => '2023-05-09 12:32:45',
                'deleted_at' => null,
            ],
            224 => [

                'district_id' => 70,
                'title' => 'Ramaroshan Rural Municipality',

                'created_at' => '2023-05-09 12:32:57',
                'updated_at' => '2023-05-09 12:32:57',
                'deleted_at' => null,
            ],
            225 => [

                'district_id' => 70,
                'title' => 'Turmakhad Rural Municipality',

                'created_at' => '2023-05-09 12:33:09',
                'updated_at' => '2023-05-09 12:33:09',
                'deleted_at' => null,
            ],
            226 => [

                'district_id' => 70,
                'title' => 'Bannigadhi Jayagadh Rural Municipality',

                'created_at' => '2023-05-09 12:33:20',
                'updated_at' => '2023-05-09 12:33:20',
                'deleted_at' => null,
            ],
            227 => [

                'district_id' => 70,
                'title' => 'Sanphebagar Municipality',

                'created_at' => '2023-05-09 12:33:31',
                'updated_at' => '2023-05-09 12:33:31',
                'deleted_at' => null,
            ],
            228 => [

                'district_id' => 70,
                'title' => 'Mangalsen Municipality',

                'created_at' => '2023-05-09 12:33:42',
                'updated_at' => '2023-05-09 12:33:42',
                'deleted_at' => null,
            ],
            229 => [

                'district_id' => 70,
                'title' => 'Kamalbazar Municipality',

                'created_at' => '2023-05-09 12:33:54',
                'updated_at' => '2023-05-09 12:33:54',
                'deleted_at' => null,
            ],
            230 => [

                'district_id' => 70,
                'title' => 'Panchadewal Binayak Municipality',

                'created_at' => '2023-05-09 12:34:06',
                'updated_at' => '2023-05-09 12:34:06',
                'deleted_at' => null,
            ],
            231 => [

                'district_id' => 69,
                'title' => 'Chure Rural Municipality',

                'created_at' => '2023-05-09 12:34:50',
                'updated_at' => '2023-05-09 12:34:50',
                'deleted_at' => null,
            ],
            232 => [

                'district_id' => 69,
                'title' => 'Janaki Rural Municipality',

                'created_at' => '2023-05-09 12:35:03',
                'updated_at' => '2023-05-09 12:35:03',
                'deleted_at' => null,
            ],
            233 => [

                'district_id' => 69,
                'title' => 'Kailari Rural Municipality',

                'created_at' => '2023-05-09 12:35:15',
                'updated_at' => '2023-05-09 12:35:15',
                'deleted_at' => null,
            ],
            234 => [

                'district_id' => 69,
                'title' => 'Joshipur Rural Municipality',

                'created_at' => '2023-05-09 12:35:28',
                'updated_at' => '2023-05-09 12:35:28',
                'deleted_at' => null,
            ],
            235 => [

                'district_id' => 69,
                'title' => 'Mohanyal Rural Municipality',

                'created_at' => '2023-05-09 12:35:41',
                'updated_at' => '2023-05-09 12:35:41',
                'deleted_at' => null,
            ],
            236 => [

                'district_id' => 69,
                'title' => 'Bardagoriya Rural Municipality',

                'created_at' => '2023-05-09 12:35:53',
                'updated_at' => '2023-05-09 12:35:53',
                'deleted_at' => null,
            ],
            237 => [

                'district_id' => 69,
                'title' => 'Tikapur Municipality',

                'created_at' => '2023-05-09 12:36:06',
                'updated_at' => '2023-05-09 12:36:06',
                'deleted_at' => null,
            ],
            238 => [

                'district_id' => 69,
                'title' => 'Ghodaghodi Municipality',

                'created_at' => '2023-05-09 12:36:19',
                'updated_at' => '2023-05-09 12:36:19',
                'deleted_at' => null,
            ],
            239 => [

                'district_id' => 69,
                'title' => 'Bhajani Municipality',

                'created_at' => '2023-05-09 12:36:33',
                'updated_at' => '2023-05-09 12:36:33',
                'deleted_at' => null,
            ],
            240 => [

                'district_id' => 69,
                'title' => 'Dhangadhi Sub-Metropolitian City',

                'created_at' => '2023-05-09 12:36:48',
                'updated_at' => '2023-05-09 12:36:48',
                'deleted_at' => null,
            ],
            241 => [

                'district_id' => 69,
                'title' => 'Gauriganga Municipality',

                'created_at' => '2023-05-09 12:37:00',
                'updated_at' => '2023-05-09 12:37:00',
                'deleted_at' => null,
            ],
            242 => [

                'district_id' => 69,
                'title' => 'Godawari Municipality',

                'created_at' => '2023-05-09 12:37:13',
                'updated_at' => '2023-05-09 12:37:13',
                'deleted_at' => null,
            ],
            243 => [

                'district_id' => 69,
                'title' => 'Lamkichuha Municipality',

                'created_at' => '2023-05-09 12:37:26',
                'updated_at' => '2023-05-09 12:37:26',
                'deleted_at' => null,
            ],
            244 => [

                'district_id' => 74,
                'title' => 'Beldandi Rural Municipality',

                'created_at' => '2023-05-09 12:38:11',
                'updated_at' => '2023-05-09 12:38:11',
                'deleted_at' => null,
            ],
            245 => [

                'district_id' => 74,
                'title' => 'Laljhadi Rural Municipality',

                'created_at' => '2023-05-09 12:38:24',
                'updated_at' => '2023-05-09 12:38:24',
                'deleted_at' => null,
            ],
            246 => [

                'district_id' => 74,
                'title' => 'Punarbas Municipality',

                'created_at' => '2023-05-09 12:38:36',
                'updated_at' => '2023-05-09 12:38:36',
                'deleted_at' => null,
            ],
            247 => [

                'district_id' => 74,
                'title' => 'Krishnapur Municipality',

                'created_at' => '2023-05-09 12:38:49',
                'updated_at' => '2023-05-09 12:38:49',
                'deleted_at' => null,
            ],
            248 => [

                'district_id' => 74,
                'title' => 'Mahakali Municipality',

                'created_at' => '2023-05-09 12:39:02',
                'updated_at' => '2023-05-09 12:39:02',
                'deleted_at' => null,
            ],
            249 => [

                'district_id' => 74,
                'title' => 'Bedkot Municipality',

                'created_at' => '2023-05-09 12:39:18',
                'updated_at' => '2023-05-09 12:39:18',
                'deleted_at' => null,
            ],
            250 => [

                'district_id' => 74,
                'title' => 'Belauri Municipality',

                'created_at' => '2023-05-09 12:39:31',
                'updated_at' => '2023-05-09 12:39:31',
                'deleted_at' => null,
            ],
            251 => [

                'district_id' => 74,
                'title' => 'Bhimdatta Municipality',

                'created_at' => '2023-05-09 12:39:43',
                'updated_at' => '2023-05-09 12:39:43',
                'deleted_at' => null,
            ],
            252 => [

                'district_id' => 74,
                'title' => 'Shuklaphanta Municipality',

                'created_at' => '2023-05-09 12:39:57',
                'updated_at' => '2023-05-09 12:39:57',
                'deleted_at' => null,
            ],
        ]);
    }
}
