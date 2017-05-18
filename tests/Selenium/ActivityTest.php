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
//                'datetimestart' => '2019-01-02 08:30:00',
//                'datetimeend' => '2019-01-02 12:45:00',
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
            ->typeInformation([
                'title' => 'B-Battle',
                'description' => 'KEFO en B-battle voor alle wijkbewoners/ Bosschenaren, Baggerloop voor 7 basisscholen in Den Bosch Oost en Hintham en 5 middelbare scholen. Dit zijn juist 5 middelbare scholen waar veel kinderen/ jongeren op zitten die niet actief deelnemen aan een sportvereniging en vaak ook een “rugzakje” hebben.',
//                'datetimestart' => '2019-01-02 08:30:00',
//                'datetimeend' => '2019-01-02 12:45:00',
                'price' => '10',
            ],true )
            ->click('createSubmit')
            ->hold(1)
            ->see('Activiteiten')
            ->see('B-Battle');
    }

    public function testDeleteActivity()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
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
