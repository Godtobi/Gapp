<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'name' => 'superAdmin'
            ],
            [
                'name' => 'admin'
            ],

            [
                'name' => 'employee'
            ],
            [
                'name' => 'company'
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

    }
}
