<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $adminRole=Role::where('name','admin')->first();
        $storeRole=Role::where('name','storemanager')->first();
        $userRole=Role::where('name','user')->first();


        $admin=User::create([
            'name' =>'Admin ',
            'email' =>'admin@admin.com',
            'password' =>Hash::make('adminpassword')
        ]);

        $user=User::create([
           'name' =>'User',
           'email' =>'user@user.com',
           'password' =>Hash::make('password')
        ]);
        $storekeeper=User::create([
            'name' =>'storemanager',
            'email' =>'storemanage@store.com',
            'password' =>Hash::make('spassword')
         ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
        $storekeeper->roles()->attach($storeRole);
        //
    }
}