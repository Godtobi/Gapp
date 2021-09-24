<?php

namespace Database\Seeders;

use App\Models\Employee;
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
        $this->call(RolePermissionSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(UserSeeder::class);
    }
}
