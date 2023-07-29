<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('countries')->delete();

        DB::table('countries')->insert([
            0 => [

                'title' => 'Afghanistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            1 => [

                'title' => 'Albania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            2 => [

                'title' => 'Algeria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            3 => [

                'title' => 'Andorra',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            4 => [

                'title' => 'Angola',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            5 => [

                'title' => 'Antigua and Barbuda',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            6 => [

                'title' => 'Argentina',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            7 => [

                'title' => 'Armenia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            8 => [

                'title' => 'Austria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            9 => [

                'title' => 'Azerbaijan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            10 => [

                'title' => 'Bahrain',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            11 => [

                'title' => 'Bangladesh',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            12 => [

                'title' => 'Barbados',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            13 => [

                'title' => 'Belarus',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            14 => [

                'title' => 'Belgium',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            15 => [

                'title' => 'Belize',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            16 => [

                'title' => 'Benin',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            17 => [

                'title' => 'Bhutan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            18 => [

                'title' => 'Bolivia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            19 => [

                'title' => 'Bosnia and Herzegovina',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            20 => [

                'title' => 'Botswana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            21 => [

                'title' => 'Brazil',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            22 => [

                'title' => 'Brunei',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            23 => [

                'title' => 'Bulgaria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            24 => [

                'title' => 'Burkina Faso',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            25 => [

                'title' => 'Burundi',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            26 => [

                'title' => 'Cabo Verde',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            27 => [

                'title' => 'Cambodia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            28 => [

                'title' => 'Cameroon',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            29 => [

                'title' => 'Canada',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            30 => [

                'title' => 'Central African Republic',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            31 => [

                'title' => 'Chad',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            32 => [

                'title' => 'Channel Islands',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            33 => [

                'title' => 'Chile',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            34 => [

                'title' => 'China',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            35 => [

                'title' => 'Colombia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            36 => [

                'title' => 'Comoros',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            37 => [

                'title' => 'Congo',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            38 => [

                'title' => 'Costa Rica',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            39 => [

                'title' => 'Cote d Ivoire',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            40 => [

                'title' => 'Croatia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            41 => [

                'title' => 'Cuba',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            42 => [

                'title' => 'Cyprus',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            43 => [

                'title' => 'Czech Republic',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            44 => [

                'title' => 'Denmark',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            45 => [

                'title' => 'Djibouti',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            46 => [

                'title' => 'Dominica',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            47 => [

                'title' => 'Dominican Republic',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            48 => [

                'title' => 'DR Congo',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            49 => [

                'title' => 'Ecuador',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            50 => [

                'title' => 'Egypt',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            51 => [

                'title' => 'El Salvador',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            52 => [

                'title' => 'Equatorial Guinea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            53 => [

                'title' => 'Eritrea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            54 => [

                'title' => 'Estonia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            55 => [

                'title' => 'Eswatini',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            56 => [

                'title' => 'Ethiopia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            57 => [

                'title' => 'Faeroe Islands',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            58 => [

                'title' => 'Finland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            59 => [

                'title' => 'France',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            60 => [

                'title' => 'French Guiana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            61 => [

                'title' => 'Gabon',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            62 => [

                'title' => 'Gambia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            63 => [

                'title' => 'Georgia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            64 => [

                'title' => 'Germany',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            65 => [

                'title' => 'Ghana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            66 => [

                'title' => 'Gibraltar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            67 => [

                'title' => 'Greece',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            68 => [

                'title' => 'Grenada',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            69 => [

                'title' => 'Guatemala',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            70 => [

                'title' => 'Guinea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            71 => [

                'title' => 'Guinea-Bissau',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            72 => [

                'title' => 'Guyana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            73 => [

                'title' => 'Haiti',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            74 => [

                'title' => 'Holy See',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            75 => [

                'title' => 'Honduras',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            76 => [

                'title' => 'Hong Kong',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            77 => [

                'title' => 'Hungary',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            78 => [

                'title' => 'Iceland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            79 => [

                'title' => 'India',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            80 => [

                'title' => 'Indonesia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            81 => [

                'title' => 'Iran',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            82 => [

                'title' => 'Iraq',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            83 => [

                'title' => 'Ireland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            84 => [

                'title' => 'Isle of Man',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            85 => [

                'title' => 'Israel',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            86 => [

                'title' => 'Italy',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            87 => [

                'title' => 'Jamaica',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            88 => [

                'title' => 'Japan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            89 => [

                'title' => 'Jordan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            90 => [

                'title' => 'Kazakhstan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            91 => [

                'title' => 'Kenya',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            92 => [

                'title' => 'Kuwait',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            93 => [

                'title' => 'Kyrgyzstan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            94 => [

                'title' => 'Laos',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            95 => [

                'title' => 'Latvia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            96 => [

                'title' => 'Lebanon',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            97 => [

                'title' => 'Lesotho',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            98 => [

                'title' => 'Liberia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            99 => [

                'title' => 'Libya',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            100 => [

                'title' => 'Liechtenstein',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            101 => [

                'title' => 'Lithuania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            102 => [

                'title' => 'Luxembourg',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            103 => [

                'title' => 'Macao',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            104 => [

                'title' => 'Madagascar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            105 => [

                'title' => 'Malawi',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            106 => [

                'title' => 'Malaysia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            107 => [

                'title' => 'Maldives',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            108 => [

                'title' => 'Mali',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            109 => [

                'title' => 'Malta',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            110 => [

                'title' => 'Mauritania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            111 => [

                'title' => 'Mauritius',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            112 => [

                'title' => 'Mayotte',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            113 => [

                'title' => 'Mexico',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            114 => [

                'title' => 'Moldova',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            115 => [

                'title' => 'Monaco',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            116 => [

                'title' => 'Mongolia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            117 => [

                'title' => 'Montenegro',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            118 => [

                'title' => 'Morocco',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            119 => [

                'title' => 'Mozambique',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            120 => [

                'title' => 'Myanmar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            121 => [

                'title' => 'Namibia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            122 => [

                'title' => 'Nepal',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            123 => [

                'title' => 'Netherlands',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            124 => [

                'title' => 'Nicaragua',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            125 => [

                'title' => 'Niger',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            126 => [

                'title' => 'Nigeria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            127 => [

                'title' => 'North Korea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            128 => [

                'title' => 'North Macedonia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            129 => [

                'title' => 'Norway',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            130 => [

                'title' => 'Oman',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            131 => [

                'title' => 'Pakistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            132 => [

                'title' => 'Panama',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            133 => [

                'title' => 'Paraguay',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            134 => [

                'title' => 'Peru',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            135 => [

                'title' => 'Philippines',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            136 => [

                'title' => 'Poland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            137 => [

                'title' => 'Portugal',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            138 => [

                'title' => 'Qatar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            139 => [

                'title' => 'Réunion',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            140 => [

                'title' => 'Romania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            141 => [

                'title' => 'Russia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            142 => [

                'title' => 'Rwanda',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            143 => [

                'title' => 'Saint Helena',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            144 => [

                'title' => 'Saint Kitts and Nevis',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            145 => [

                'title' => 'Saint Lucia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            146 => [

                'title' => 'Saint Vincent and the Grenadines',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            147 => [

                'title' => 'San Marino',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            148 => [

                'title' => 'Sao Tome & Principe',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            149 => [

                'title' => 'Saudi Arabia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            150 => [

                'title' => 'Senegal',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            151 => [

                'title' => 'Serbia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            152 => [

                'title' => 'Seychelles',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            153 => [

                'title' => 'Sierra Leone',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            154 => [

                'title' => 'Singapore',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            155 => [

                'title' => 'Slovakia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            156 => [

                'title' => 'Slovenia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            157 => [

                'title' => 'Somalia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            158 => [

                'title' => 'South Africa',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            159 => [

                'title' => 'South Korea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            160 => [

                'title' => 'South Sudan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            161 => [

                'title' => 'Spain',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            162 => [

                'title' => 'Sri Lanka',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            163 => [

                'title' => 'State of Palestine',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            164 => [

                'title' => 'Sudan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            165 => [

                'title' => 'Suriname',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            166 => [

                'title' => 'Sweden',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            167 => [

                'title' => 'Switzerland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            168 => [

                'title' => 'Syria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            169 => [

                'title' => 'Taiwan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            170 => [

                'title' => 'Tajikistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            171 => [

                'title' => 'Tanzania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            172 => [

                'title' => 'Thailand',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            173 => [

                'title' => 'The Bahamas',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            174 => [

                'title' => 'Timor-Leste',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            175 => [

                'title' => 'Togo',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            176 => [

                'title' => 'Trinidad and Tobago',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            177 => [

                'title' => 'Tunisia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            178 => [

                'title' => 'Turkey',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            179 => [

                'title' => 'Turkmenistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            180 => [

                'title' => 'Uganda',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            181 => [

                'title' => 'Ukraine',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            182 => [

                'title' => 'United Arab Emirates',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            183 => [

                'title' => 'United Kingdom',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            184 => [

                'title' => 'United States',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            185 => [

                'title' => 'Uruguay',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            186 => [

                'title' => 'Uzbekistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            187 => [

                'title' => 'Venezuela',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            188 => [

                'title' => 'Vietnam',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            189 => [

                'title' => 'Western Sahara',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            190 => [

                'title' => 'Yemen',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            191 => [

                'title' => 'Zambia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            192 => [

                'title' => 'Zimbabwe',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
        ]);
    }
}
