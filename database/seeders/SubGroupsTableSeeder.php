<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\SubGroup;
use Illuminate\Database\Seeder;

class SubGroupsTableSeeder extends Seeder
{
    public function run(): void
    {
        $subGroups = [
            [

                'group_id' => 1,
                'title' => 'इलेक्ट्रिकल',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 1,
                'title' => 'इलेक्ट्रोनिक्स',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 2,
                'title' => '-',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 3,
                'title' => 'सिभिल',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 3,
                'title' => 'सर्भे',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 4,
                'title' => '-',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 5,
                'title' => 'वातावरण',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 5,
                'title' => 'जियोलजी',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 5,
                'title' => 'सवारी चालक',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 5,
                'title' => 'स्वास्थ्य',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 5,
                'title' => 'प्लम्बिङ्ग',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 5,
                'title' => 'डाइभिङ्ग',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 6,
                'title' => 'प्रशासन',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 6,
                'title' => 'कानून',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 6,
                'title' => 'कम्प्यूटर अप्रेशन',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 7,
                'title' => 'लेखा',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 7,
                'title' => 'चाटर्ड एकाउन्टेन्सी',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 8,
                'title' => 'अर्थशास्त्र',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 8,
                'title' => 'समाजशास्त्र',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 8,
                'title' => 'तथ्याङ्कशास्त्र',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 8,
                'title' => 'सुरक्षा',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
            [

                'group_id' => 8,
                'title' => 'कुक',
                'created_at' => '2022-01-24 18:00:13',
                'updated_at' => '2022-01-24 18:00:13',
                'deleted_at' => null,
            ],
        ];

        SubGroup::insert($subGroups);
    }
}
