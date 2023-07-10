<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $qualifications = [
            [
                'ID' => 1,
                'TITLE' => 'कक्षा दश',
                'ORDER' => '1',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'एस एल सी / CTEVT (Level 1)',
                'ORDER' => '2',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 3,
                'TITLE' => 'प्लस टु /डिप्लोमा / Level 2 / Level3',
                'ORDER' => '3',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 4,
                'TITLE' => 'स्नातक वा सो सरह',
                'ORDER' => '4',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 5,
                'TITLE' => 'स्नाकोतर वा सो सरह',
                'ORDER' => '5',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 6,
                'TITLE' => 'एम फिल वा सो सरह',
                'ORDER' => '6',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 7,
                'TITLE' => 'विधावारिधि वा सो सरह',
                'ORDER' => '7',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            // [
            //     'ID' => 8,
            //     'TITLE' => 'अन्य',
            //     'ORDER' => '8',
            //     'CREATED_AT' => '2022-01-24 18:00:13',
            //     'UPDATED_AT' => '2022-01-24 18:00:13',
            //     'DELETED_AT' => null
            // ],
        ];

        Qualification::insert($qualifications);
    }
}
