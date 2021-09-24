<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeeAccount = User::factory(50)->create();
        $companyAccount = User::factory(50)->create();
        $eCount = 0;
        foreach ($employeeAccount as $account){
            $account->assignRole("employee");
            $account->employee_id = ++$eCount;
            $account->save();
        }

        foreach ($companyAccount as $account){
            $account->assignRole("company");
            $account->employee_id = ++$eCount;
            $account->save();
        }
    }
}
