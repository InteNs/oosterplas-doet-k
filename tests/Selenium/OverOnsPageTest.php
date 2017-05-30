<?php
namespace Tests\Selenium;

class OverOnsPageTest extends BaseSeleniumTestCase
{
    public function testOverOnsPage()
    {
        $this->visit('/over-ons')->see('Over ons');
    }
}