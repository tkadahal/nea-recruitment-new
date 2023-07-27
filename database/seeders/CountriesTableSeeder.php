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
                'id' => 1,
                'title' => 'Afghanistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            1 => [
                'id' => 2,
                'title' => 'Albania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            2 => [
                'id' => 3,
                'title' => 'Algeria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            3 => [
                'id' => 4,
                'title' => 'Andorra',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            4 => [
                'id' => 5,
                'title' => 'Angola',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            5 => [
                'id' => 6,
                'title' => 'Antigua and Barbuda',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            6 => [
                'id' => 7,
                'title' => 'Argentina',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            7 => [
                'id' => 8,
                'title' => 'Armenia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            8 => [
                'id' => 9,
                'title' => 'Austria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            9 => [
                'id' => 10,
                'title' => 'Azerbaijan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            10 => [
                'id' => 11,
                'title' => 'Bahrain',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            11 => [
                'id' => 12,
                'title' => 'Bangladesh',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            12 => [
                'id' => 13,
                'title' => 'Barbados',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            13 => [
                'id' => 14,
                'title' => 'Belarus',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            14 => [
                'id' => 15,
                'title' => 'Belgium',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            15 => [
                'id' => 16,
                'title' => 'Belize',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            16 => [
                'id' => 17,
                'title' => 'Benin',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            17 => [
                'id' => 18,
                'title' => 'Bhutan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            18 => [
                'id' => 19,
                'title' => 'Bolivia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            19 => [
                'id' => 20,
                'title' => 'Bosnia and Herzegovina',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            20 => [
                'id' => 21,
                'title' => 'Botswana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            21 => [
                'id' => 22,
                'title' => 'Brazil',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            22 => [
                'id' => 23,
                'title' => 'Brunei',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            23 => [
                'id' => 24,
                'title' => 'Bulgaria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            24 => [
                'id' => 25,
                'title' => 'Burkina Faso',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            25 => [
                'id' => 26,
                'title' => 'Burundi',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            26 => [
                'id' => 27,
                'title' => 'Cabo Verde',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            27 => [
                'id' => 28,
                'title' => 'Cambodia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            28 => [
                'id' => 29,
                'title' => 'Cameroon',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            29 => [
                'id' => 30,
                'title' => 'Canada',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            30 => [
                'id' => 31,
                'title' => 'Central African Republic',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            31 => [
                'id' => 32,
                'title' => 'Chad',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            32 => [
                'id' => 33,
                'title' => 'Channel Islands',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            33 => [
                'id' => 34,
                'title' => 'Chile',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            34 => [
                'id' => 35,
                'title' => 'China',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            35 => [
                'id' => 36,
                'title' => 'Colombia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            36 => [
                'id' => 37,
                'title' => 'Comoros',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            37 => [
                'id' => 38,
                'title' => 'Congo',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            38 => [
                'id' => 39,
                'title' => 'Costa Rica',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            39 => [
                'id' => 40,
                'title' => 'Cote d Ivoire',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            40 => [
                'id' => 41,
                'title' => 'Croatia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            41 => [
                'id' => 42,
                'title' => 'Cuba',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            42 => [
                'id' => 43,
                'title' => 'Cyprus',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            43 => [
                'id' => 44,
                'title' => 'Czech Republic',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            44 => [
                'id' => 45,
                'title' => 'Denmark',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            45 => [
                'id' => 46,
                'title' => 'Djibouti',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            46 => [
                'id' => 47,
                'title' => 'Dominica',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            47 => [
                'id' => 48,
                'title' => 'Dominican Republic',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            48 => [
                'id' => 49,
                'title' => 'DR Congo',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            49 => [
                'id' => 50,
                'title' => 'Ecuador',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            50 => [
                'id' => 51,
                'title' => 'Egypt',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            51 => [
                'id' => 52,
                'title' => 'El Salvador',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            52 => [
                'id' => 53,
                'title' => 'Equatorial Guinea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            53 => [
                'id' => 54,
                'title' => 'Eritrea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            54 => [
                'id' => 55,
                'title' => 'Estonia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            55 => [
                'id' => 56,
                'title' => 'Eswatini',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            56 => [
                'id' => 57,
                'title' => 'Ethiopia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            57 => [
                'id' => 58,
                'title' => 'Faeroe Islands',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            58 => [
                'id' => 59,
                'title' => 'Finland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            59 => [
                'id' => 60,
                'title' => 'France',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            60 => [
                'id' => 61,
                'title' => 'French Guiana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            61 => [
                'id' => 62,
                'title' => 'Gabon',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            62 => [
                'id' => 63,
                'title' => 'Gambia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            63 => [
                'id' => 64,
                'title' => 'Georgia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            64 => [
                'id' => 65,
                'title' => 'Germany',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            65 => [
                'id' => 66,
                'title' => 'Ghana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            66 => [
                'id' => 67,
                'title' => 'Gibraltar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            67 => [
                'id' => 68,
                'title' => 'Greece',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            68 => [
                'id' => 69,
                'title' => 'Grenada',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            69 => [
                'id' => 70,
                'title' => 'Guatemala',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            70 => [
                'id' => 71,
                'title' => 'Guinea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            71 => [
                'id' => 72,
                'title' => 'Guinea-Bissau',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            72 => [
                'id' => 73,
                'title' => 'Guyana',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            73 => [
                'id' => 74,
                'title' => 'Haiti',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            74 => [
                'id' => 75,
                'title' => 'Holy See',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            75 => [
                'id' => 76,
                'title' => 'Honduras',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            76 => [
                'id' => 77,
                'title' => 'Hong Kong',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            77 => [
                'id' => 78,
                'title' => 'Hungary',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            78 => [
                'id' => 79,
                'title' => 'Iceland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            79 => [
                'id' => 80,
                'title' => 'India',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            80 => [
                'id' => 81,
                'title' => 'Indonesia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            81 => [
                'id' => 82,
                'title' => 'Iran',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            82 => [
                'id' => 83,
                'title' => 'Iraq',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            83 => [
                'id' => 84,
                'title' => 'Ireland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            84 => [
                'id' => 85,
                'title' => 'Isle of Man',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            85 => [
                'id' => 86,
                'title' => 'Israel',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            86 => [
                'id' => 87,
                'title' => 'Italy',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            87 => [
                'id' => 88,
                'title' => 'Jamaica',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            88 => [
                'id' => 89,
                'title' => 'Japan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            89 => [
                'id' => 90,
                'title' => 'Jordan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            90 => [
                'id' => 91,
                'title' => 'Kazakhstan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            91 => [
                'id' => 92,
                'title' => 'Kenya',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            92 => [
                'id' => 93,
                'title' => 'Kuwait',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            93 => [
                'id' => 94,
                'title' => 'Kyrgyzstan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            94 => [
                'id' => 95,
                'title' => 'Laos',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            95 => [
                'id' => 96,
                'title' => 'Latvia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            96 => [
                'id' => 97,
                'title' => 'Lebanon',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            97 => [
                'id' => 98,
                'title' => 'Lesotho',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            98 => [
                'id' => 99,
                'title' => 'Liberia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            99 => [
                'id' => 100,
                'title' => 'Libya',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            100 => [
                'id' => 101,
                'title' => 'Liechtenstein',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            101 => [
                'id' => 102,
                'title' => 'Lithuania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            102 => [
                'id' => 103,
                'title' => 'Luxembourg',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            103 => [
                'id' => 104,
                'title' => 'Macao',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            104 => [
                'id' => 105,
                'title' => 'Madagascar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            105 => [
                'id' => 106,
                'title' => 'Malawi',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            106 => [
                'id' => 107,
                'title' => 'Malaysia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            107 => [
                'id' => 108,
                'title' => 'Maldives',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            108 => [
                'id' => 109,
                'title' => 'Mali',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            109 => [
                'id' => 110,
                'title' => 'Malta',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            110 => [
                'id' => 111,
                'title' => 'Mauritania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            111 => [
                'id' => 112,
                'title' => 'Mauritius',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            112 => [
                'id' => 113,
                'title' => 'Mayotte',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            113 => [
                'id' => 114,
                'title' => 'Mexico',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            114 => [
                'id' => 115,
                'title' => 'Moldova',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            115 => [
                'id' => 116,
                'title' => 'Monaco',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            116 => [
                'id' => 117,
                'title' => 'Mongolia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            117 => [
                'id' => 118,
                'title' => 'Montenegro',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            118 => [
                'id' => 119,
                'title' => 'Morocco',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            119 => [
                'id' => 120,
                'title' => 'Mozambique',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            120 => [
                'id' => 121,
                'title' => 'Myanmar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            121 => [
                'id' => 122,
                'title' => 'Namibia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            122 => [
                'id' => 123,
                'title' => 'Nepal',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            123 => [
                'id' => 124,
                'title' => 'Netherlands',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            124 => [
                'id' => 125,
                'title' => 'Nicaragua',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            125 => [
                'id' => 126,
                'title' => 'Niger',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            126 => [
                'id' => 127,
                'title' => 'Nigeria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            127 => [
                'id' => 128,
                'title' => 'North Korea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            128 => [
                'id' => 129,
                'title' => 'North Macedonia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            129 => [
                'id' => 130,
                'title' => 'Norway',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            130 => [
                'id' => 131,
                'title' => 'Oman',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            131 => [
                'id' => 132,
                'title' => 'Pakistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            132 => [
                'id' => 133,
                'title' => 'Panama',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            133 => [
                'id' => 134,
                'title' => 'Paraguay',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            134 => [
                'id' => 135,
                'title' => 'Peru',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            135 => [
                'id' => 136,
                'title' => 'Philippines',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            136 => [
                'id' => 137,
                'title' => 'Poland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            137 => [
                'id' => 138,
                'title' => 'Portugal',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            138 => [
                'id' => 139,
                'title' => 'Qatar',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            139 => [
                'id' => 140,
                'title' => 'Réunion',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            140 => [
                'id' => 141,
                'title' => 'Romania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            141 => [
                'id' => 142,
                'title' => 'Russia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            142 => [
                'id' => 143,
                'title' => 'Rwanda',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            143 => [
                'id' => 144,
                'title' => 'Saint Helena',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            144 => [
                'id' => 145,
                'title' => 'Saint Kitts and Nevis',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            145 => [
                'id' => 146,
                'title' => 'Saint Lucia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            146 => [
                'id' => 147,
                'title' => 'Saint Vincent and the Grenadines',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            147 => [
                'id' => 148,
                'title' => 'San Marino',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            148 => [
                'id' => 149,
                'title' => 'Sao Tome & Principe',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            149 => [
                'id' => 150,
                'title' => 'Saudi Arabia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            150 => [
                'id' => 151,
                'title' => 'Senegal',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            151 => [
                'id' => 152,
                'title' => 'Serbia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            152 => [
                'id' => 153,
                'title' => 'Seychelles',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            153 => [
                'id' => 154,
                'title' => 'Sierra Leone',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            154 => [
                'id' => 155,
                'title' => 'Singapore',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            155 => [
                'id' => 156,
                'title' => 'Slovakia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            156 => [
                'id' => 157,
                'title' => 'Slovenia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            157 => [
                'id' => 158,
                'title' => 'Somalia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            158 => [
                'id' => 159,
                'title' => 'South Africa',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            159 => [
                'id' => 160,
                'title' => 'South Korea',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            160 => [
                'id' => 161,
                'title' => 'South Sudan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            161 => [
                'id' => 162,
                'title' => 'Spain',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            162 => [
                'id' => 163,
                'title' => 'Sri Lanka',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            163 => [
                'id' => 164,
                'title' => 'State of Palestine',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            164 => [
                'id' => 165,
                'title' => 'Sudan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            165 => [
                'id' => 166,
                'title' => 'Suriname',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            166 => [
                'id' => 167,
                'title' => 'Sweden',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            167 => [
                'id' => 168,
                'title' => 'Switzerland',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            168 => [
                'id' => 169,
                'title' => 'Syria',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            169 => [
                'id' => 170,
                'title' => 'Taiwan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            170 => [
                'id' => 171,
                'title' => 'Tajikistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            171 => [
                'id' => 172,
                'title' => 'Tanzania',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            172 => [
                'id' => 173,
                'title' => 'Thailand',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            173 => [
                'id' => 174,
                'title' => 'The Bahamas',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            174 => [
                'id' => 175,
                'title' => 'Timor-Leste',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            175 => [
                'id' => 176,
                'title' => 'Togo',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            176 => [
                'id' => 177,
                'title' => 'Trinidad and Tobago',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            177 => [
                'id' => 178,
                'title' => 'Tunisia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            178 => [
                'id' => 179,
                'title' => 'Turkey',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            179 => [
                'id' => 180,
                'title' => 'Turkmenistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            180 => [
                'id' => 181,
                'title' => 'Uganda',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            181 => [
                'id' => 182,
                'title' => 'Ukraine',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            182 => [
                'id' => 183,
                'title' => 'United Arab Emirates',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            183 => [
                'id' => 184,
                'title' => 'United Kingdom',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            184 => [
                'id' => 185,
                'title' => 'United States',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            185 => [
                'id' => 186,
                'title' => 'Uruguay',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            186 => [
                'id' => 187,
                'title' => 'Uzbekistan',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            187 => [
                'id' => 188,
                'title' => 'Venezuela',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            188 => [
                'id' => 189,
                'title' => 'Vietnam',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            189 => [
                'id' => 190,
                'title' => 'Western Sahara',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            190 => [
                'id' => 191,
                'title' => 'Yemen',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            191 => [
                'id' => 192,
                'title' => 'Zambia',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
            192 => [
                'id' => 193,
                'title' => 'Zimbabwe',

                'created_at' => '2023-05-07 18:31:03',
                'updated_at' => '2023-05-07 18:31:03',
                'deleted_at' => null,
            ],
        ]);
    }
}
