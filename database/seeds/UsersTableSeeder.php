<?php
namespace Database\Seeds;

use DB;
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
        DB::table('users')->insertGetId([
            'name' => 'admin',
            'email' => 'admin@oosterplasdoet.com',
            'password' => bcrypt('admin1'),
        ]);

        DB::table('users')->insertGetId([
            'name' => 'moderator',
            'email' => 'mod@oosterplasdoet.com',
            'password' => bcrypt('moderator'),
        ]);

        DB::table('users')->insertGetId([
            'name' => 'manager',
            'email' => 'manager@oosterplasdoet.com',
            'password' => bcrypt('manager'),
        ]);
    }
}
