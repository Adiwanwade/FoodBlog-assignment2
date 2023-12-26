<?php

namespace Database\Seeders\d\database\seeders;


use Database\Seeders\AdminRoleSeeder;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminRoleSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}
