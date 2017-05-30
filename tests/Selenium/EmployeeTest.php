<?php
namespace Tests\Selenium;

use App;

class EmployeeTest extends BaseSeleniumTestCase
{
    public function testOverviewEmployee()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/employee')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Medewerkers');
    }

    public function testCreateEmployee()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/employee/create')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Voeg een medewerker toe')
            ->submitForm('.createForm', [
                'name' => 'sampleEmployee',
                'description' => 'Deze employee is een sampleemployee, en heeft dus ook een sampledescription.',
            ])
            ->hold(1)
            ->see('Medewerkers')
            ->see('sampleEmployee');
    }

    public function testEditMedewerkers()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $employee = factory(App\Employee::class)->create();

        $this
            ->visit('/beheer/employee/'.$employee->id.'/edit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Wijzig een medewerker')
            ->submitForm('.editForm', [
                'name' => 'Een aangepaste titel',
                'description' => 'Een aangepaste beschrijving',
            ])
            ->hold(1)
            ->see('Medewerkers')
            ->see('Een aangepaste titel');
    }

    public function testDeleteEmployee()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $employee = factory(App\Employee::class)->create();

        $this
            ->visit('/beheer/employee')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Medewerkers')
            ->see($employee->name)
            ->submitForm('#formDelete'.$employee->id, [])
            ->hold(1)
            ->notSee($employee->name);
    }
}