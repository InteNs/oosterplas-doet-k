<?php
namespace Tests\Selenium;

use App;

class ActivityTest extends BaseSeleniumTestCase
{
    public function testOverviewActivities()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/activiteit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Activiteiten');
    }
}
