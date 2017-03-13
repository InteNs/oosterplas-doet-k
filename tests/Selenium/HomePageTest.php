<?php
use Modelizer\Selenium\SeleniumTestCase;

class HomePageTest extends SeleniumTestCase
{

    public function testLandingPage() {
        $this->visit('/')->see('HOME');
    }

}
