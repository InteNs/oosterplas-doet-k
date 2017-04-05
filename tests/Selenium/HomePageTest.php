<?php
namespace Tests\Selenium;

class HomePageTest extends BaseSeleniumTestCase
{
    public function testLandingPage()
    {
        $this->visit('/')->see('HOME');
    }
}
