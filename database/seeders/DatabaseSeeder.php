<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Devi\Admin\Database\Seeders\DatabaseSeeder as AdminDatabaseSeeder;
use Devi\Core\Database\Seeders\DatabaseSeeder as CoreDatabaseSeeder;
use Devi\User\Database\Seeders\DatabaseSeeder as UserDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminDatabaseSeeder::class);
        $this->call(CoreDatabaseSeeder::class);
        $this->call(UserDatabaseSeeder::class);
    }
}
