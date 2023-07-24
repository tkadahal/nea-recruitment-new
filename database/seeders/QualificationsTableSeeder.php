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
                'id' => 1,
                'title' => 'कक्षा दश',
                'order' => '1',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'एस एल सी / CTEVT (Level 1)',
                'order' => '2',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'प्लस टु /डिप्लोमा / Level 2 / Level3',
                'order' => '3',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'स्नातक वा सो सरह',
                'order' => '4',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'स्नाकोतर वा सो सरह',
                'order' => '5',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'title' => 'एम फिल वा सो सरह',
                'order' => '6',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'title' => 'विधावारिधि वा सो सरह',
                'order' => '7',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            // [
            //     'id' => 8,
            //     'title' => 'अन्य',
            //     'order' => '8',
            //     'created_at' => '2022-01-24 18:00:13',
            //     'updated_at' => '2022-01-24 18:00:13',
            //     'deleted_at' => null
            // ],
        ];

        Qualification::insert($qualifications);
    }
}
