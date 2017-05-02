<?php
namespace Tests\Selenium;

use Modelizer\Selenium\SeleniumTestCase;

class BaseSeleniumTestCase extends SeleniumTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function tearDown()
    {
        parent::tearDown();
        $this->artisan('migrate:refresh');
    }
}
