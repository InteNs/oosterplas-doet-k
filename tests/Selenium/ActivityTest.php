<?php
namespace Tests\Selenium;

use App;

class ActivityTest extends BaseSeleniumTestCase
{
    public function testOverviewActivities()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/activiteit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Activiteiten');
    }

    public function testEditActivity()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $activity = factory(App\Activity::class)->create();

        $this
            ->visit('/beheer/activiteit/'.$activity->id.'/edit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Verander een activiteit')
            ->typeInformation( [
                'title' => 'Een aangepaste titel',
                'description' => 'Een aangepaste beschrijving',
                'sorting_date' => '2019-01-02 08:30:00',
                'display_date' => 'test',
                'price' => '55',
            ], true)
            ->click('editSubmit')
            ->hold(1)
            ->see('Activiteiten')
            ->see('Een aangepaste titel');
    }

    public function testCreateActivity()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $this
            ->visit('/beheer/activiteit/create')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Creëer een activiteit')
            ->submitForm('.createForm', [
                'title' => 'B-Battle',
                'description' => 'kefo en b-battle voor alle wijkbewoners/ bosschenaren, baggerloop voor 7 basisscholen in den bosch oost en hintham en 5 middelbare scholen. Dit zijn juist 5 middelbare scholen waar veel kinderen/ jongeren op zitten die niet actief deelnemen aan een sportvereniging en vaak ook een “rugzakje” hebben.',
                'display_date' => 'test',
                'price' => '10',
              ])
            ->hold(1)
            ->see('Activiteiten')
            ->see('B-Battle');
    }

    public function testDeleteActivity()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        // First activity is homework so it has to be ignored
        factory(App\Activity::class)->create();
        $activity = factory(App\Activity::class)->create();

        $this
            ->visit('/beheer/activiteit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Activiteiten')
            ->see($activity->title)
            ->submitForm('#formDelete'.$activity->id, [])
            ->hold(1)
            ->notSee($activity->title);
    }
}
