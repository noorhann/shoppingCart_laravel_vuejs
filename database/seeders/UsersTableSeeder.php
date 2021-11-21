<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
        {
            $user = new User;
            $user->name = "Admin";
            $user->email = "admin@gmail.com";
            $user->password = bcrypt('admin');
            $user->is_admin = true;
            $user->save();
        }
}
