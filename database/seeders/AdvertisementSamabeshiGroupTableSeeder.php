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

        DB::table('advertisement_samabeshi_group')->insert(array(
            0 =>
            array(
                'advertisement_id' => 1,
                'samabeshi_group_id' => 1,
            ),
            1 =>
            array(
                'advertisement_id' => 1,
                'samabeshi_group_id' => 2,
            ),
            2 =>
            array(
                'advertisement_id' => 1,
                'samabeshi_group_id' => 4,
            ),
            3 =>
            array(
                'advertisement_id' => 1,
                'samabeshi_group_id' => 5,
            ),
            4 =>
            array(
                'advertisement_id' => 2,
                'samabeshi_group_id' => 2,
            ),
            5 =>
            array(
                'advertisement_id' => 3,
                'samabeshi_group_id' => 1,
            ),
            6 =>
            array(
                'advertisement_id' => 3,
                'samabeshi_group_id' => 2,
            ),
            7 =>
            array(
                'advertisement_id' => 3,
                'samabeshi_group_id' => 5,
            ),
            8 =>
            array(
                'advertisement_id' => 3,
                'samabeshi_group_id' => 6,
            ),
            9 =>
            array(
                'advertisement_id' => 3,
                'samabeshi_group_id' => 7,
            ),
        ));
    }
}
