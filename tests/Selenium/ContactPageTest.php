<?php
namespace Tests\Selenium;

class ContactPageTest extends BaseSeleniumTestCase
{
    public function testOverviewContactPage()
    {
        $this->visit('/contact')->see('Neem vandaag nog contact op!');
    }

    public function testContactForm()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 'test',
                'email' => 'test@example.com',
                'phone' => '0612345678',
                'text' => 'Dit is een test vraag'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Bedankt voor het opnemen van contact met ons, we zullen spoedig een reactie sturen.');
    }

    public function testContactFormNoName()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'email' => 'test@example.com',
                'phone' => '0612345678',
                'text' => 'Dit is een test vraag'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Vul alstublieft uw naam in');
    }

    public function testContactFormNameTooShort()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 't',
                'email' => 'test@example.com',
                'phone' => '0612345678',
                'text' => 'Dit is een test vraag'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Vul tenminste 2 karakters in');
    }

    public function testContactFormNoEmail()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 'test',
                'phone' => '0612345678',
                'text' => 'Dit is een test vraag'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Vul alstublieft uw emailadres in');
    }

    public function testContactFormWrongEmail()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 'test',
                'email' => 'test',
                'phone' => '0612345678',
                'text' => 'Dit is een test vraag'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Vul alstublieft een geldig emailadres in');
    }

    public function testContactFormNoText()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 'test',
                'email' => 'test@example.com',
                'phone' => '0612345678'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Vul alstublieft uw vraag/opmerking in');
    }

    public function testContactFormShortText()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 'test',
                'email' => 'test@example.com',
                'phone' => '0612345678',
                'text' => 'te klein'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Vul tenminste 10 karakters en niet meer dan 200 in');
    }

    public function testContactFormLongText()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 'test',
                'email' => 'test@example.com',
                'phone' => '0612345678',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus quam eget ornare lobortis. Vivamus eros mi, laoreet a consectetur tempor, consectetur ac leo. Fusce eu ante faucibus, fringilla arcu sed, feugiat risus. Mauris at lorem et posuere.'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Vul tenminste 10 karakters en niet meer dan 200 in');
    }

    public function testContactFormNoPhone()
    {
        $this
            ->visit('/contact')
            ->hold(1)
            ->typeInformation([
                'name' => 'test',
                'email' => 'test@example.com',
                'text' => 'Dit is een test vraag'])
            ->hold(1)
            ->click('createSubmit')
            ->hold(2)
            ->see('Bedankt voor het opnemen van contact met ons, we zullen spoedig een reactie sturen.');
    }
}
