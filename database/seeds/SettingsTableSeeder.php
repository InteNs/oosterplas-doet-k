<?php

use Illuminate\Database\Seeder;
use App\Setting;

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
            'name' => 'stichting OosterplasDOET!',
            'address' => 'Vincent van Goghlaan 1 Rosmalen',
            'zipcode' => '5246 GA',
            'email' => 'oosterplasdoet@gmail.com',
            'RSIN-number' => '855080528',
            'KvK-number' => '63073579',
            'SBI-code' => '88993',
            'account-number' => 'NL64 TRIO 0212 1974 44',
        ]);
    }
}
