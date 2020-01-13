<?php

use App\Department;
use App\Employee;
use App\Role;
use App\User;
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
        factory(User::class, 2)->create();
        factory(Department::class, 5)->create();
        factory(Role::class, 10)->create();
        factory(Employee::class, 50)->create();
    }
}
