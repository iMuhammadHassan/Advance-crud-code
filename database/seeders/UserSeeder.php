<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo([Permission::all()]);

        $role = Role::create(['name' => 'staff']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo(Permission::all());

        // $role = Role::create(['name' => 'contributor']);
        // $role->givePermissionTo(Permission::all());

        $user1 = new User;
        $user1->name = 'Majid Fazal';
        $user1->email = 'admin@gmail.com';
        $user1->password = Hash::make('test123');
        $user1->save();
        $user1->assignRole('admin');

        $user2 = new User;
        $user2->name = 'staff';
        $user2->email = 'staff@gmail.com';
        $user2->password = Hash::make('test123');
        $user2->save();
        $user2->assignRole('staff');


        $user3 = new User;
        $user3->name = 'user';
        $user3->email = 'user@gmail.com';
        $user3->password = Hash::make('test123');
        $user3->save();
        $user3->assignRole('user');

        // $user4 = new User;
        // $user4->name = 'contributor';
        // $user4->email = 'contributor@gmail.com';
        // $user4->password = Hash::make('test123');
        // $user4->save();
        // $user4->assignRole('contributor');
    }
}
