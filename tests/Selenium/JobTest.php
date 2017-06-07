<?php
namespace Tests\Selenium;

use App;

class JobTest extends BaseSeleniumTestCase
{
    public function testOverviewJob()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/job')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Vacatures');
    }

    public function testCreateJob()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/job/create')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Voeg een vacature toe')
            ->submitForm('.createForm', [
                'name' => 'samplejob',
                'description' => 'Deze job is een samplejob, en heeft dus ook een sampledescription.',
                'places' => 1,
                'online' => 0,
            ])
            ->hold(1)
            ->see('Vacatures')
            ->see('samplejob');
    }

    public function testEditJob()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $job = factory(App\Job::class)->create();

        $this
            ->visit('/beheer/job/'.$job->id.'/edit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Wijzig een vacature')
            ->submitForm('.editForm', [
                'name' => 'Een aangepaste titel',
                'description' => 'Een aangepaste beschrijving',
                'places' => 100,
                'online' => 0,
            ])
            ->hold(1)
            ->see('Vacatures')
            ->see('Een aangepaste titel');
    }

    public function testDeleteJob()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $job = factory(App\Job::class)->create();

        $this
            ->visit('/beheer/job')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Vacatures')
            ->see($job->name)
            ->submitForm('#formDelete'.$job->id, [])
            ->hold(1)
            ->notSee($job->name);
    }
}
