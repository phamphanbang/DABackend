<?php

namespace Database\Seeders;

use ClusterInPart;
use Illuminate\Database\Seeder;
use TypeOfParts;
use TypeOfTests;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            TypeOfTestSeeder::class,
            TypeOfPartSeeder::class,
            TypeOfClusterSeeder::class,
            ClusterInPartSeeder::class,
        ]);
    }
}
