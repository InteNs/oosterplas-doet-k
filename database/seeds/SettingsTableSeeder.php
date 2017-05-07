<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate([
            'address' => 'Vincent van Goghlaan 1 Rosmalen',
            'zipcode' => '5246 GA',
            'email' => 'oosterplasdoet@gmail.com',
            'RSIN-number' => '855080528',
            'KvK-number' => '63073579',
            'SBI-code' => '88993',
        ]);
    }
}
