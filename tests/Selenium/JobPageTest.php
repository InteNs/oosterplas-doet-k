<?php
namespace Tests\Selenium;

class JobPageTest extends BaseSeleniumTestCase
{
    public function testJobPage()
    {
        $this->visit('/vacature')->see('Vacatures');
    }
}
