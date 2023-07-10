<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminRoleTableSeeder extends Seeder
{
    public function run(): void
    {
        Admin::findOrFail(1)->roles()->sync(1);
    }
}
