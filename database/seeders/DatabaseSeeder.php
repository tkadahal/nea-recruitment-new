<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // OfficesTableSeeder::class,
            // UserTypesTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            AdminsTableSeeder::class,
            AdminRoleTableSeeder::class,
            GendersTableSeeder::class,
            FiscalYearTableSeeder::class,
            ProvincesTableSeeder::class,
            DistrictsTableSeeder::class,
            MunicipalitiesTableSeeder::class,
            QualificationsTableSeeder::class,
            UniversitiesTableSeeder::class,
            DivisionsTableSeeder::class,
            RecruitmentTypesTableSeeder::class,
            MediaTypesTableSeeder::class,
            CountriesTableSeeder::class,
            CategoriesTableSeeder::class,
            GroupsTableSeeder::class,
            SubGroupsTableSeeder::class,
            LevelsTableSeeder::class,
            DesignationsTableSeeder::class,
            ApplicationFeesTableSeeder::class,
            ExamCentersTableSeeder::class,
            SamabeshiGroupsTableSeeder::class,
            UsersTableSeeder::class,
            AdvertisementsTableSeeder::class,
            AdvertisementSamabeshiGroupTableSeeder::class
        ]);
    }
}
