<?php
namespace Tests\Selenium;

use App;

class UserTest extends BaseSeleniumTestCase
{
    public function testOverviewUsers()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/gebruiker')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Gebruikers');
    }

    public function testEditUser()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/gebruiker/'.$user->id.'/edit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Verander een gebruiker')
            ->typeInformation([
                'name' => 'Een aangepaste naam',
                'email' => 'changed@email.com',
            ], true)
            ->submitForm('.editForm', [])
            ->hold(1)
            ->see('Gebruikers')
            ->see('Een aangepaste naam');
    }

    public function testCreateUser()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/gebruiker/create')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Creëer een gebruiker')
            ->submitForm('.createForm', [
                'name' => 'TRAVISOP',
                'email' => 'travis@op.com',
                'password' =>'travisisop',
            ])
            ->hold(1)
            ->see('Gebruikers')
            ->see('TRAVISOP');
    }

    public function testDeleteUser()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test'), 'isAdmin' => '1']);
        $user1 = factory(App\User::class)->create(['password' => bcrypt('test1')]);

        $this
            ->visit('/beheer/gebruiker')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Gebruikers')
            ->see($user1->name)
            ->hold(1)
            ->click('linkDel'.$user1->id)
            ->hold(1)
            ->click('delete-btn')
            ->hold(1)
            ->notSee($user1->name);
    }

    public function testDeleteUserCancel()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test'), 'isAdmin' => '1']);
        $user1 = factory(App\User::class)->create(['password' => bcrypt('test1')]);

        $this
            ->visit('/beheer/gebruiker')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Gebruikers')
            ->see($user1->name)
            ->hold(1)
            ->click('linkDel'.$user1->id)
            ->hold(1)
            ->click('cancel-btn')
            ->hold(1)
            ->see($user1->name);
    }
}
