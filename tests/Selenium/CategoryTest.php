<?php
namespace Tests\Selenium;

use App;

class CategoryTest extends BaseSeleniumTestCase
{
    public function testOverviewCategories()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/categorie')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Categorieën');
    }

    public function testEditCategory()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $category = factory(App\Category::class)->create();

        $this
            ->visit('/beheer/categorie/'.$category->id.'/edit')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Verander een categorie')
            ->submitForm('.editForm', [
                'title' => 'Een aangepaste titel',
                'description' => 'Een aangepaste beschrijving',
            ])
            ->hold(1)
            ->see('Categorieën')
            ->see('Een aangepaste titel');
    }

    public function testCreateCategory()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);

        $this
            ->visit('/beheer/categorie/create')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Creëer een categorie')
            ->submitForm('.createForm', [
                'title' => 'Baggerloop',
                'description' => 'hindernis parkour',

            ])
            ->hold(1)
            ->see('Categorieën')
            ->see('Baggerloop');
    }

    public function testDeleteCategory()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('test')]);
        $category = factory(App\Category::class)->create();

        $this
            ->visit('/beheer/categorie')
            ->see('Login')
            ->typeInformation(['email' => $user->email, 'password' => 'test'])
            ->press('Inloggen')
            ->hold(1)
            ->see('Categorieën')
            ->see($category->title)
            ->submitForm('#formDelete'.$category->id, [])
            ->hold(1)
            ->notSee($category->title);
    }
}