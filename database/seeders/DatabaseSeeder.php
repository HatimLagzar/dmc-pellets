<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'm.negelya@gmail.com';
        $password = '1234567890'; // TEMPORARY!
        $user->password = bcrypt($password);
        $user->save();
    }
}
