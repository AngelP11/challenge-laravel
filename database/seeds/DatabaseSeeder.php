<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 10)->create();
        $this->call(RolePermissionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
