<?php

namespace Tests\Selenium;

use App;

class SponsorTest extends BaseSeleniumTestCase
{
    public function testOverviewSponsor()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $this
        ->visit('/beheer/sponsor')
        ->see('Login')
        ->typeInformation(['email' => $user->email, 'password' => 'test'])
        ->press('Inloggen')
        ->hold(1)
        ->see('Sponsor');
    }
    public function testCreateSponsor()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $this
        ->visit('/beheer/sponsor/create')
        ->see('Login')
        ->typeInformation(['email' => $user->email, 'password' => 'test'])
        ->press('Inloggen')
        ->hold(1)
        ->see('Creëer een sponsor')
        ->submitForm('.createForm', [
        'name' => 'samplesponsor',
        'description' => 'Deze sponsor is een samplesponsor, en heeft dus ook een sampledescription.',
        'link' => 'samplesponsor.com',
        'rank' => 1,
        ])
        ->hold(1)
        ->see('Sponsors')
        ->see('samplesponsor');
    }
    public function testEditSponsor()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $sponsor = factory(App\Sponsor::class)->create();
        $this
        ->visit('/beheer/partner/'.$sponsor->id.'/edit')
        ->see('Login')
        ->typeInformation(['email' => $user->email, 'password' => 'test'])
        ->press('Inloggen')
        ->hold(1)
        ->see('Verander een sponsor')
        ->submitForm('.editForm', [
        'name' => 'Een aangepaste titel',
        'description' => 'Een aangepaste beschrijving',
        'rank' => '1',
        'link' => 'www.examplesite.com',
        ])
        ->hold(1)
        ->see('Sponsors')
        ->see('Een aangepaste titel');
    }
    public function testDeleteSponsor()
    {
    $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
    $sponsor = factory(App\Sponsor::class)->create();
    $this
    ->visit('/beheer/sponsor')
    ->see('Login')
    ->typeInformation(['email' => $user->email, 'password' => 'test'])
    ->press('Inloggen')
    ->hold(1)
    ->see('Sponsors')
    ->see($sponsor->name)
    ->submitForm('#formDelete'.$sponsor->id, [])
    ->hold(1)
    ->notSee($sponsor->name);
    }
}