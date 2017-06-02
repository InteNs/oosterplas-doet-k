<?php
namespace Tests\Selenium;

class HomeworkPageTest extends BaseSeleniumTestCase
{
    public function testOverviewHomeworkPage()
    {
        $this->artisan('db:seed', ['--class' => 'ActivitiesTableSeeder']);
        $this->visit('/evenementen/1')->see('Schrijf je in voor Studiebegeleiding!');
    }

    public function testContactForm()
    {
        $this->artisan('db:seed', ['--class' => 'ActivitiesTableSeeder']);
        $this
            ->visit('/evenementen/1')
            ->hold(1)
            ->typeInformation([
                'firstname' => 'Peter',
                'lastname' => 'van de Vries',
                'email' => 'test@example.com',
                'phone' => '0612345678'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(1)
            ->see('Uw aanmelding voor Studiebegeleiding is succesvol verzonden. Er zal spoedig contact met u worden opgenomen.');
    }
}
