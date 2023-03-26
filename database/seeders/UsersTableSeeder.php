<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
          'name' => 'Milad',
          'email' => 'miladrz@gmail.com',
          'password' => bcrypt(value: '123456')
        ]);
        $author = User::create([
          'name' => 'mohammad',
          'email' => 'alizade@gmail.com',
          'password' => bcrypt(value: '123456')
        ]);
        $user = User::create([
          'name' => 'Ali',
          'email' => 'alipoor@gmail.com',
          'password' => bcrypt(value: '123456')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
