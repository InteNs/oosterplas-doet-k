<?php
namespace Tests\Selenium;

use App;

class HomePageTest extends BaseSeleniumTestCase
{
    public function testLandingPage()
    {
        factory(App\Slider::class)->create();
        $this->visit('/')->see('HOME');
    }
}
