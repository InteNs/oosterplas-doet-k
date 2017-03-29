<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'admin',
            'email' => 'admin@oosterplasdoet.com',
            'password' => bcrypt('admin1'),
        ]);

        User::updateOrCreate([
            'name' => 'moderator',
            'email' => 'mod@oosterplasdoet.com',
            'password' => bcrypt('moderator'),
        ]);

        User::updateOrCreate([
            'name' => 'manager',
            'email' => 'manager@oosterplasdoet.com',
            'password' => bcrypt('manager'),
        ]);
    }
}
