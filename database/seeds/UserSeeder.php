<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //membuat role admin 
        // $adminRole = new Role();
        // $adminRole->name = "admin";
        // $adminRole->display_name = "Admin";
        // $adminRole->save();

        //Membuat sample admin
        $role = Role::where('name', 'admin')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@email.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($role);
    }
}
