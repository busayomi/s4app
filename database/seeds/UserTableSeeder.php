<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_sadmin = Role::where('name', 'Super Admin')->first();

        $user = new User();
        $user->name = 'Bolanle';
        $user->email = 'bola@g.com';
        $user->password = bcrypt('111111');
        $user->save();
        $user->role()->attach($role_user);

        $admin = new User();
        $admin->name = 'Dare';
        $admin->email = 'dare@g.com';
        $admin->password = bcrypt('111111');
        $admin->save();
        $admin->role()->attach($role_admin);

        $sadmin = new User();
        $sadmin->name = 'Seun';
        $sadmin->email = 'seun@g.com';
        $sadmin->password = bcrypt('111111');
        $sadmin->save();
        $sadmin->role()->attach($role_sadmin);

    }
}
