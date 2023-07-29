<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('districts')->delete();

        DB::table('districts')->insert([
            0 => [

                'province_id' => 1,
                'title' => 'Bhojpur District',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            1 => [

                'province_id' => 1,
                'title' => 'Dhankuta District',

                'created_at' => '2023-05-07 18:31:13',
                'updated_at' => '2023-05-07 18:31:13',
                'deleted_at' => null,
            ],
            2 => [

                'province_id' => 1,
                'title' => 'Ilam District',

                'created_at' => '2023-05-07 18:31:24',
                'updated_at' => '2023-05-07 18:31:24',
                'deleted_at' => null,
            ],
            3 => [

                'province_id' => 1,
                'title' => 'Jhapa District',

                'created_at' => '2023-05-07 18:31:33',
                'updated_at' => '2023-05-07 18:31:33',
                'deleted_at' => null,
            ],
            4 => [

                'province_id' => 1,
                'title' => 'Khotang District',

                'created_at' => '2023-05-07 18:31:42',
                'updated_at' => '2023-05-07 18:31:42',
                'deleted_at' => null,
            ],
            5 => [

                'province_id' => 1,
                'title' => 'Morang District',

                'created_at' => '2023-05-07 18:34:54',
                'updated_at' => '2023-05-07 18:34:54',
                'deleted_at' => null,
            ],
            6 => [

                'province_id' => 1,
                'title' => 'Okhaldhunga District',

                'created_at' => '2023-05-07 18:35:03',
                'updated_at' => '2023-05-07 18:35:03',
                'deleted_at' => null,
            ],
            7 => [

                'province_id' => 1,
                'title' => 'Panchthar District',

                'created_at' => '2023-05-07 18:35:13',
                'updated_at' => '2023-05-07 18:35:13',
                'deleted_at' => null,
            ],
            8 => [

                'province_id' => 1,
                'title' => 'Sankhuwasabha District',

                'created_at' => '2023-05-07 18:35:21',
                'updated_at' => '2023-05-07 18:35:21',
                'deleted_at' => null,
            ],
            9 => [

                'province_id' => 1,
                'title' => 'Solukhumbu District',

                'created_at' => '2023-05-07 18:35:29',
                'updated_at' => '2023-05-07 18:35:29',
                'deleted_at' => null,
            ],
            10 => [

                'province_id' => 1,
                'title' => 'Sunsari District',

                'created_at' => '2023-05-07 18:35:37',
                'updated_at' => '2023-05-07 18:35:37',
                'deleted_at' => null,
            ],
            11 => [

                'province_id' => 1,
                'title' => 'Taplejung District',

                'created_at' => '2023-05-07 18:35:45',
                'updated_at' => '2023-05-07 18:35:45',
                'deleted_at' => null,
            ],
            12 => [

                'province_id' => 1,
                'title' => 'Tehrathum District',

                'created_at' => '2023-05-07 18:35:54',
                'updated_at' => '2023-05-07 18:35:54',
                'deleted_at' => null,
            ],
            13 => [

                'province_id' => 1,
                'title' => 'Udayapur District',

                'created_at' => '2023-05-07 18:36:02',
                'updated_at' => '2023-05-07 18:36:02',
                'deleted_at' => null,
            ],
            14 => [

                'province_id' => 2,
                'title' => 'Parsa District',

                'created_at' => '2023-05-07 18:36:36',
                'updated_at' => '2023-05-07 18:36:36',
                'deleted_at' => null,
            ],
            15 => [

                'province_id' => 2,
                'title' => 'Bara District',

                'created_at' => '2023-05-07 18:36:44',
                'updated_at' => '2023-05-07 18:36:44',
                'deleted_at' => null,
            ],
            16 => [

                'province_id' => 2,
                'title' => 'Rautahat District',

                'created_at' => '2023-05-07 18:36:54',
                'updated_at' => '2023-05-07 18:36:54',
                'deleted_at' => null,
            ],
            17 => [

                'province_id' => 2,
                'title' => 'Sarlahi District',

                'created_at' => '2023-05-07 18:37:03',
                'updated_at' => '2023-05-07 18:37:03',
                'deleted_at' => null,
            ],
            18 => [

                'province_id' => 2,
                'title' => 'Dhanusha District',

                'created_at' => '2023-05-07 18:37:13',
                'updated_at' => '2023-05-07 18:37:13',
                'deleted_at' => null,
            ],
            19 => [

                'province_id' => 2,
                'title' => 'Siraha District',

                'created_at' => '2023-05-07 18:37:22',
                'updated_at' => '2023-05-07 18:37:22',
                'deleted_at' => null,
            ],
            20 => [

                'province_id' => 2,
                'title' => 'Mahottari District',

                'created_at' => '2023-05-07 18:37:32',
                'updated_at' => '2023-05-07 18:37:32',
                'deleted_at' => null,
            ],
            21 => [

                'province_id' => 2,
                'title' => 'Saptari District',

                'created_at' => '2023-05-07 18:37:40',
                'updated_at' => '2023-05-07 18:37:40',
                'deleted_at' => null,
            ],
            22 => [

                'province_id' => 3,
                'title' => 'Sindhuli District',

                'created_at' => '2023-05-07 18:38:03',
                'updated_at' => '2023-05-07 18:38:03',
                'deleted_at' => null,
            ],
            23 => [

                'province_id' => 3,
                'title' => 'Ramechhap District',

                'created_at' => '2023-05-07 18:38:15',
                'updated_at' => '2023-05-07 18:38:15',
                'deleted_at' => null,
            ],
            24 => [

                'province_id' => 3,
                'title' => 'Dolakha District',

                'created_at' => '2023-05-07 18:38:24',
                'updated_at' => '2023-05-07 18:38:24',
                'deleted_at' => null,
            ],
            25 => [

                'province_id' => 3,
                'title' => 'Bhaktapur District',

                'created_at' => '2023-05-07 18:38:33',
                'updated_at' => '2023-05-07 18:38:33',
                'deleted_at' => null,
            ],
            26 => [

                'province_id' => 3,
                'title' => 'Dhading District',

                'created_at' => '2023-05-07 18:38:41',
                'updated_at' => '2023-05-07 18:38:41',
                'deleted_at' => null,
            ],
            27 => [

                'province_id' => 3,
                'title' => 'Kathmandu District',

                'created_at' => '2023-05-07 18:38:51',
                'updated_at' => '2023-05-07 18:38:51',
                'deleted_at' => null,
            ],
            28 => [

                'province_id' => 3,
                'title' => 'Kavrepalanchok District',

                'created_at' => '2023-05-07 18:38:59',
                'updated_at' => '2023-05-07 18:38:59',
                'deleted_at' => null,
            ],
            29 => [

                'province_id' => 3,
                'title' => 'Lalitpur District',

                'created_at' => '2023-05-07 18:39:09',
                'updated_at' => '2023-05-07 18:39:09',
                'deleted_at' => null,
            ],
            30 => [

                'province_id' => 3,
                'title' => 'Nuwakot District',

                'created_at' => '2023-05-07 18:39:22',
                'updated_at' => '2023-05-07 18:39:22',
                'deleted_at' => null,
            ],
            31 => [

                'province_id' => 3,
                'title' => 'Rasuwa District',

                'created_at' => '2023-05-07 18:39:31',
                'updated_at' => '2023-05-07 18:39:31',
                'deleted_at' => null,
            ],
            32 => [

                'province_id' => 3,
                'title' => 'Sindhupalchok District',

                'created_at' => '2023-05-07 18:39:39',
                'updated_at' => '2023-05-07 18:39:39',
                'deleted_at' => null,
            ],
            33 => [

                'province_id' => 3,
                'title' => 'Chitwan District',

                'created_at' => '2023-05-07 18:39:48',
                'updated_at' => '2023-05-07 18:39:48',
                'deleted_at' => null,
            ],
            34 => [

                'province_id' => 3,
                'title' => 'Makwanpur District',

                'created_at' => '2023-05-07 18:39:56',
                'updated_at' => '2023-05-07 18:39:56',
                'deleted_at' => null,
            ],
            35 => [

                'province_id' => 4,
                'title' => 'Baglung District',

                'created_at' => '2023-05-07 18:40:13',
                'updated_at' => '2023-05-07 18:40:13',
                'deleted_at' => null,
            ],
            36 => [

                'province_id' => 4,
                'title' => 'Gorkha District',

                'created_at' => '2023-05-07 18:40:21',
                'updated_at' => '2023-05-07 18:40:21',
                'deleted_at' => null,
            ],
            37 => [

                'province_id' => 4,
                'title' => 'Kaski District',

                'created_at' => '2023-05-07 18:40:30',
                'updated_at' => '2023-05-07 18:40:30',
                'deleted_at' => null,
            ],
            38 => [

                'province_id' => 4,
                'title' => 'Lamjung District',

                'created_at' => '2023-05-07 18:40:41',
                'updated_at' => '2023-05-07 18:40:41',
                'deleted_at' => null,
            ],
            39 => [

                'province_id' => 4,
                'title' => 'Manang District',

                'created_at' => '2023-05-07 18:40:50',
                'updated_at' => '2023-05-07 18:40:50',
                'deleted_at' => null,
            ],
            40 => [

                'province_id' => 4,
                'title' => 'Mustang District',

                'created_at' => '2023-05-07 18:40:59',
                'updated_at' => '2023-05-07 18:40:59',
                'deleted_at' => null,
            ],
            41 => [

                'province_id' => 4,
                'title' => 'Myagdi District',

                'created_at' => '2023-05-07 18:41:09',
                'updated_at' => '2023-05-07 18:41:09',
                'deleted_at' => null,
            ],
            42 => [

                'province_id' => 4,
                'title' => 'Nawalparasi (East of Bardaghat Susta) District',

                'created_at' => '2023-05-07 18:41:19',
                'updated_at' => '2023-05-07 18:41:19',
                'deleted_at' => null,
            ],
            43 => [

                'province_id' => 4,
                'title' => 'Parbat District',

                'created_at' => '2023-05-07 18:41:28',
                'updated_at' => '2023-05-07 18:41:28',
                'deleted_at' => null,
            ],
            44 => [

                'province_id' => 4,
                'title' => 'Syangja District',

                'created_at' => '2023-05-07 18:41:37',
                'updated_at' => '2023-05-07 18:41:37',
                'deleted_at' => null,
            ],
            45 => [

                'province_id' => 4,
                'title' => 'Tanahun District',

                'created_at' => '2023-05-07 18:41:45',
                'updated_at' => '2023-05-07 18:41:45',
                'deleted_at' => null,
            ],
            46 => [

                'province_id' => 5,
                'title' => 'Kapilvastu District',

                'created_at' => '2023-05-07 18:42:54',
                'updated_at' => '2023-05-07 18:42:54',
                'deleted_at' => null,
            ],
            47 => [

                'province_id' => 5,
                'title' => 'Nawalparasi (West of Bardaghat Susta) District',

                'created_at' => '2023-05-07 18:43:02',
                'updated_at' => '2023-05-07 18:43:02',
                'deleted_at' => null,
            ],
            48 => [

                'province_id' => 5,
                'title' => 'Rupandehi District',

                'created_at' => '2023-05-07 18:43:10',
                'updated_at' => '2023-05-07 18:43:10',
                'deleted_at' => null,
            ],
            49 => [

                'province_id' => 5,
                'title' => 'Arghakhanchi District',

                'created_at' => '2023-05-07 18:43:19',
                'updated_at' => '2023-05-07 18:43:19',
                'deleted_at' => null,
            ],
            50 => [

                'province_id' => 5,
                'title' => 'Gulmi District',

                'created_at' => '2023-05-07 18:43:27',
                'updated_at' => '2023-05-07 18:43:27',
                'deleted_at' => null,
            ],
            51 => [

                'province_id' => 5,
                'title' => 'Palpa District',

                'created_at' => '2023-05-07 18:43:35',
                'updated_at' => '2023-05-07 18:43:35',
                'deleted_at' => null,
            ],
            52 => [

                'province_id' => 5,
                'title' => 'Dang District',

                'created_at' => '2023-05-07 18:43:43',
                'updated_at' => '2023-05-07 18:43:43',
                'deleted_at' => null,
            ],
            53 => [

                'province_id' => 5,
                'title' => 'Pyuthan District',

                'created_at' => '2023-05-07 18:43:51',
                'updated_at' => '2023-05-07 18:43:51',
                'deleted_at' => null,
            ],
            54 => [

                'province_id' => 5,
                'title' => 'Rolpa District',

                'created_at' => '2023-05-07 18:43:59',
                'updated_at' => '2023-05-07 18:43:59',
                'deleted_at' => null,
            ],
            55 => [

                'province_id' => 5,
                'title' => 'Eastern Rukum',

                'created_at' => '2023-05-07 18:44:07',
                'updated_at' => '2023-05-07 18:44:07',
                'deleted_at' => null,
            ],
            56 => [

                'province_id' => 5,
                'title' => 'Banke District',

                'created_at' => '2023-05-07 18:44:15',
                'updated_at' => '2023-05-07 18:44:15',
                'deleted_at' => null,
            ],
            57 => [

                'province_id' => 5,
                'title' => 'Bardiya District',

                'created_at' => '2023-05-07 18:44:24',
                'updated_at' => '2023-05-07 18:44:24',
                'deleted_at' => null,
            ],
            58 => [

                'province_id' => 6,
                'title' => 'Western Rukum District',

                'created_at' => '2023-05-07 18:44:51',
                'updated_at' => '2023-05-07 18:44:51',
                'deleted_at' => null,
            ],
            59 => [

                'province_id' => 6,
                'title' => 'Salyan District',

                'created_at' => '2023-05-07 18:45:00',
                'updated_at' => '2023-05-07 18:45:00',
                'deleted_at' => null,
            ],
            60 => [

                'province_id' => 6,
                'title' => 'Dolpa District',

                'created_at' => '2023-05-07 18:45:08',
                'updated_at' => '2023-05-07 18:45:08',
                'deleted_at' => null,
            ],
            61 => [

                'province_id' => 6,
                'title' => 'Humla District',

                'created_at' => '2023-05-07 18:45:16',
                'updated_at' => '2023-05-07 18:45:16',
                'deleted_at' => null,
            ],
            62 => [

                'province_id' => 6,
                'title' => 'Jumla District',

                'created_at' => '2023-05-07 18:45:25',
                'updated_at' => '2023-05-07 18:45:25',
                'deleted_at' => null,
            ],
            63 => [

                'province_id' => 6,
                'title' => 'Kalikot District',

                'created_at' => '2023-05-07 18:45:33',
                'updated_at' => '2023-05-07 18:45:33',
                'deleted_at' => null,
            ],
            64 => [

                'province_id' => 6,
                'title' => 'Mugu District',

                'created_at' => '2023-05-07 18:45:42',
                'updated_at' => '2023-05-07 18:45:42',
                'deleted_at' => null,
            ],
            65 => [

                'province_id' => 6,
                'title' => 'Surkhet District',

                'created_at' => '2023-05-07 18:45:54',
                'updated_at' => '2023-05-07 18:45:54',
                'deleted_at' => null,
            ],
            66 => [

                'province_id' => 6,
                'title' => 'Dailekh District',

                'created_at' => '2023-05-07 18:46:04',
                'updated_at' => '2023-05-07 18:46:04',
                'deleted_at' => null,
            ],
            67 => [

                'province_id' => 6,
                'title' => 'Jajarkot District',

                'created_at' => '2023-05-07 18:46:13',
                'updated_at' => '2023-05-07 18:46:13',
                'deleted_at' => null,
            ],
            68 => [

                'province_id' => 7,
                'title' => 'Kailali District',

                'created_at' => '2023-05-07 18:46:39',
                'updated_at' => '2023-05-07 18:46:39',
                'deleted_at' => null,
            ],
            69 => [

                'province_id' => 7,
                'title' => 'Achham District',

                'created_at' => '2023-05-07 18:46:48',
                'updated_at' => '2023-05-07 18:46:48',
                'deleted_at' => null,
            ],
            70 => [

                'province_id' => 7,
                'title' => 'Doti District',

                'created_at' => '2023-05-07 18:46:57',
                'updated_at' => '2023-05-07 18:46:57',
                'deleted_at' => null,
            ],
            71 => [

                'province_id' => 7,
                'title' => 'Bajhang District',

                'created_at' => '2023-05-07 18:47:06',
                'updated_at' => '2023-05-07 18:47:06',
                'deleted_at' => null,
            ],
            72 => [

                'province_id' => 7,
                'title' => 'Bajura District',

                'created_at' => '2023-05-07 18:47:17',
                'updated_at' => '2023-05-07 18:47:17',
                'deleted_at' => null,
            ],
            73 => [

                'province_id' => 7,
                'title' => 'Kanchanpur District',

                'created_at' => '2023-05-07 18:47:25',
                'updated_at' => '2023-05-07 18:47:25',
                'deleted_at' => null,
            ],
            74 => [

                'province_id' => 7,
                'title' => 'Dadeldhura District',

                'created_at' => '2023-05-07 18:47:33',
                'updated_at' => '2023-05-07 18:47:33',
                'deleted_at' => null,
            ],
            75 => [

                'province_id' => 7,
                'title' => 'Baitadi District',

                'created_at' => '2023-05-07 18:47:41',
                'updated_at' => '2023-05-07 18:47:41',
                'deleted_at' => null,
            ],
            76 => [

                'province_id' => 7,
                'title' => 'Darchula District',

                'created_at' => '2023-05-07 18:47:49',
                'updated_at' => '2023-05-07 18:47:49',
                'deleted_at' => null,
            ],
        ]);
    }
}
