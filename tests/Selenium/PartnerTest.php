<?php
namespace Tests\Selenium;

use App;

class PartnerTest extends BaseSeleniumTestCase
{
    public function testOverviewPartners()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/partner')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Partners');
    }

    public function testCreatePartners()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/partner/create')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Creëer een partner')
            ->submitForm('.createForm', [
                'name' => 'samplepartner',
                'description' => 'Deze partner is een samplepartner, en heeft dus ook een sampledescription.',
                'link' => 'samplepartner.com',
            ])
            ->hold(1)
            ->see('Partners')
            ->see('samplepartner');
    }

    public function testEditPartners()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $partner = factory(App\Partner::class)->create();

        $this
            ->visit('/beheer/partner/'.$partner->id.'/edit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Verander een partner')
            ->submitForm('.editForm', [
                'name' => 'Een aangepaste titel',
                'description' => 'Een aangepaste beschrijving',
                'link' => 'www.examplesite.com',
            ])
            ->hold(1)
            ->see('Partners')
            ->see('Een aangepaste titel');
    }

    public function testDeletePartners()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $partner = factory(App\Partner::class)->create();

        $this
            ->visit('/beheer/partner')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Partners')
            ->see($partner->name)
            ->submitForm('#formDelete'.$partner->id, [])
            ->hold(1)
            ->notSee($partner->name);
    }
}