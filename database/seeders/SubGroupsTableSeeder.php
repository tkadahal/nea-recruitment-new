<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubGroupsTableSeeder extends Seeder
{
    public function run(): void
    {


        DB::table('sub_groups')->delete();

        DB::table('sub_groups')->insert(array(
            0 =>
            array(

                'group_id' => 1,
                'title' => 'इलेक्ट्रिकल',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            1 =>
            array(

                'group_id' => 1,
                'title' => 'इलेक्ट्रोनिक्स',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            2 =>
            array(

                'group_id' => 2,
                'title' => '-',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            3 =>
            array(

                'group_id' => 3,
                'title' => 'सिभिल',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            4 =>
            array(

                'group_id' => 3,
                'title' => 'सर्भे',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            5 =>
            array(

                'group_id' => 4,
                'title' => '-',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            6 =>
            array(

                'group_id' => 5,
                'title' => 'वातावरण',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            7 =>
            array(

                'group_id' => 5,
                'title' => 'जियोलजी',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            8 =>
            array(

                'group_id' => 5,
                'title' => 'सवारी चालक',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            9 =>
            array(

                'group_id' => 5,
                'title' => 'स्वास्थ्य',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            10 =>
            array(

                'group_id' => 5,
                'title' => 'प्लम्बिङ्ग',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            11 =>
            array(

                'group_id' => 5,
                'title' => 'डाइभिङ्ग',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            12 =>
            array(

                'group_id' => 6,
                'title' => 'प्रशासन',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            13 =>
            array(

                'group_id' => 6,
                'title' => 'कानून',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            14 =>
            array(

                'group_id' => 6,
                'title' => 'कम्प्यूटर अप्रेशन',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            15 =>
            array(

                'group_id' => 7,
                'title' => 'लेखा',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            16 =>
            array(

                'group_id' => 7,
                'title' => 'चाटर्ड एकाउन्टेन्सी',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            17 =>
            array(

                'group_id' => 8,
                'title' => 'अर्थशास्त्र',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            18 =>
            array(

                'group_id' => 8,
                'title' => 'समाजशास्त्र',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            19 =>
            array(

                'group_id' => 8,
                'title' => 'तथ्याङ्कशास्त्र',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            20 =>
            array(

                'group_id' => 8,
                'title' => 'सुरक्षा',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
            21 =>
            array(

                'group_id' => 8,
                'title' => 'कुक',
                'active' => true,
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => NULL,
            ),
        ));
    }
}
