<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Sewa;
use Illuminate\Database\Seeder;

class SewasTableSeeder extends Seeder
{
    public function run(): void
    {
        $sewas = [
            [
                'ID' => 1,
                'TITLE' => 'प्राविधिक',
                'ACTIVE' => '1',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
            [
                'ID' => 2,
                'TITLE' => 'प्रशासन',
                'ACTIVE' => '1',
                'CREATED_AT' => '2022-01-24 18:00:13',
                'UPDATED_AT' => '2022-01-24 18:00:13',
                'DELETED_AT' => null,
            ],
        ];

        Sewa::insert($sewas);
    }
}
