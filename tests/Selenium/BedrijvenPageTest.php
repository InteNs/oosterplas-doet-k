<?php
namespace Tests\Selenium;

class BedrijvenPageTest extends BaseSeleniumTestCase
{
    public function testBedrijvenPage()
    {
        $this->visit('/bedrijven')->see('Partners');
        $this->visit('/bedrijven')->see('Sponsors');
    }
}

