<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementSamabeshiGroupsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('advertisement_samabeshi_group')->delete();

        DB::table('advertisement_samabeshi_group')->insert(array(
            0 =>
            array(
                'advertisement_id' => 1,
                'samabeshi_group_id' => 1,
                'number' => 5,
            ),
            1 =>
            array(
                'advertisement_id' => 1,
                'samabeshi_group_id' => 2,
                'number' => 1,
            ),
            2 =>
            array(
                'advertisement_id' => 2,
                'samabeshi_group_id' => 2,
                'number' => 3,
            ),
            3 =>
            array(
                'advertisement_id' => 3,
                'samabeshi_group_id' => 1,
                'number' => 5,
            ),
            4 =>
            array(
                'advertisement_id' => 3,
                'samabeshi_group_id' => 4,
                'number' => 2,
            ),
        ));
    }
}
