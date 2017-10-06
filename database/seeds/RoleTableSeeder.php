<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'Support';
        $role_user->description = 'A Support staff';
        $role_user->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A Disco Admin staff or a department head';
        $role_admin->save();

        $role_sadmin = new Role();
        $role_sadmin->name = 'Super Admin';
        $role_sadmin->description = 'A Super Admin has full control of the system';
        $role_sadmin->save();
    }
}
