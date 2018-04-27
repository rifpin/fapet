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
        $role_admin=Role::where('name','Admin')->first();
        $role_user=Role::where('name','User')->first();

        $admin=new User;
        $admin->name='Admin';
        $admin->username='admin';
        $admin->email='admin@email.com';
        $admin->password=bcrypt('admin123');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user=new User;
        $user->name='User';
        $user->username='user';
        $user->email='user@email.com';
        $user->password=bcrypt('user123');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
