<?php
namespace Tests\Selenium;

use App;

class LoginTest extends BaseSeleniumTestCase
{
    public function testLogin()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Uitloggen')
            ->submitForm('#logout-form', []);
    }
}
