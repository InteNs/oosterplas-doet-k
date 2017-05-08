<?php
namespace Tests\Selenium;

class PartnerPageTest extends BaseSeleniumTestCase
{
    public function testPartnerPage()
    {
        $this->visit('/partners')->see('partners');
    }
}