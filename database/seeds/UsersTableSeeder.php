<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Model\{User, Role};

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
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Ademir',
            'email' => 'ademir@ademir.com',
            'password' => Hash::make('123')
        ]);

        $author = User::create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'password' => Hash::make('123')
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('123')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
