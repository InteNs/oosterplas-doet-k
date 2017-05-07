<?php
namespace Tests\Selenium;

use App;

class SettingTest extends BaseSeleniumTestCase
{
    public function testShowSetting()
    {
        $setting = App\Setting::find(1);

        $this
            ->visit('/')
            ->see($setting->address)
            ->see($setting->zipcode)
            ->see($setting->email)
            ->see((string)$setting->{'RSIN-number'})
            ->see((string)$setting->{'KvK-number'})
            ->see((string)$setting->{'SBI-code'});
    }

    public function testEditSetting()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $setting = App\Setting::find(1);

        $this
            ->visit('/')
            ->see($setting->email)
            ->visit('/beheer/setting')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Website settings')
            ->typeInformation([
                'address' => 'Nieuwe straat in plaats',
                'zipcode' => '1234 AB',
                'email' => 'test@test.nl',
                'RSIN-number' => 123456789,
                'KvK-number' => 12345678,
                'SBI-code' => 12345,
            ], true)
            ->submitForm('.editForm', [])
            ->hold(1)
            ->see('Website settings')
            ->visit('/')
            ->see('test@test.nl');
    }
}
