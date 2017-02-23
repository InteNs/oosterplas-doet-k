<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modelizer\Selenium\SeleniumTestCase;

class SeleniumExampleTest extends SeleniumTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('http://localhost:8000')->see('Laravel');
    }

    public function testDemo()
    {
        $loginInput = [
            'username' => 'test',
            'password' => 'test'
        ];

        $this->visit('http://thedemosite.co.uk/addauser.php')
            ->typeInformation($loginInput)
            ->press('FormsButton2')
            ->hold(3)
            ->see('The username: test')
            ->see('The password: test');

        $this->visit('http://thedemosite.co.uk/login.php')
            ->typeInformation($loginInput)
            ->press('FormsButton2')
            ->hold(3)
            ->see('**Successful Login**');
    }
}
