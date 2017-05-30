<?php
namespace Tests\Selenium;

class ResetPasswordTest extends BaseSeleniumTestCase
{
    public function formOverview()
    {
        $this
            ->visit('/beheer/profiel/reset')
            ->see('Reset Wachtwoord');
    }

    public function ResetPassword()
    {
        $this
            ->visit('/beheer/profiel/reset')
            ->typeInformation(['password' => 'test123', 'password_confirmation' => 'test123'])
            ->press('Reset Wachtwoord');
    }
}
