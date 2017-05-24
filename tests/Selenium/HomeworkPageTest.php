<?php
namespace Tests\Selenium;

class HomeworkPageTest extends BaseSeleniumTestCase
{
    public function testOverviewHomeworkPage()
    {
        $this->visit('/huiswerkbegeleiding')->see('Schrijf je in voor huiswerkbegeleiding!');
    }

    public function testContactForm()
    {
        $this
            ->visit('/huiswerkbegeleiding')
            ->hold(1)
            ->typeInformation([
                'firstname' => 'Peter',
                'lastname' => 'van de Vries',
                'email' => 'test@example.com',
                'phone' => '0612345678'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(1)
            ->see('Uw aanmelding voor huiswerkbegeleiding is succesvol verzonden. Er zal spoedig contact met u worden opgenomen.');
    }
}
