<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementSamabeshiGroupTableSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('advertisement_samabeshi_group')->delete();

        DB::table('advertisement_samabeshi_group')->insert([
            0 => [
                'advertisement_id' => 1,
                'samabeshi_group_id' => 1,
            ],
            1 => [
                'advertisement_id' => 1,
                'samabeshi_group_id' => 2,
            ],
            2 => [
                'advertisement_id' => 1,
                'samabeshi_group_id' => 4,
            ],
            3 => [
                'advertisement_id' => 1,
                'samabeshi_group_id' => 5,
            ],
            4 => [
                'advertisement_id' => 2,
                'samabeshi_group_id' => 2,
            ],
            5 => [
                'advertisement_id' => 3,
                'samabeshi_group_id' => 1,
            ],
            6 => [
                'advertisement_id' => 3,
                'samabeshi_group_id' => 2,
            ],
            7 => [
                'advertisement_id' => 3,
                'samabeshi_group_id' => 5,
            ],
            8 => [
                'advertisement_id' => 3,
                'samabeshi_group_id' => 6,
            ],
            9 => [
                'advertisement_id' => 3,
                'samabeshi_group_id' => 7,
            ],
        ]);
    }
}
