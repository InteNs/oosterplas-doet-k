<?php

use App\Activity;
use App\Setting;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::updateOrCreate([
            'title' => 'Natuurwandeling',
            'description' =>
                'De flora en fauna langs onze Oosterplas is deze tijd van het jaar in volle glorie te bewonderen.
                Meld je nu aan voor deze bijzondere wandeling met onze eigen gids!',
            'datetimestart' => '2017-05-15 15:00:00',
            'datetimeend' => '2017-05-15 18:00:00',
            'price' => '0',
            'image' => '/images/uploads/natuurwandeling',
        ]);

        Activity::updateOrCreate([
        'title' => 'Kom Erbij Festival Oosterplas',
        'description' =>
            'Het Kom Erbij Festival Oosterplas kende vorig jaar een mooie eerste editie. 
            Daarmee is de toon gezet voor een buurtfestival dat zich ieder jaar verder zal ontwikkelen. 
            Met de allure van lokaal talent',
        'datetimestart' => '2017-06-10 09:00:00',
        'datetimeend' => '2017-06-11 23:00:00',
        'price' => '20',
        'image' => '/images/uploads/KEFO',
    ]);

        Activity::updateOrCreate([
        'title' => 'BAGGERLOOP/B-BATTLE',
        'description' =>
            'KEFO en B-battle voor alle wijkbewoners/ Bosschenaren, 
            Baggerloop voor 7 basisscholen in Den Bosch Oost en Hintham en 5 middelbare scholen. 
            Dit zijn juist 5 middelbare scholen waar veel kinderen/ jongeren op zitten die niet actief deelnemen aan een sportvereniging 
            en vaak ook een “rugzakje” hebben.',
        'datetimestart' => '2017-05-23 10:00:00',
        'datetimeend' => '2017-05-24 20:00:00',
        'price' => '0',
        'image' => '/images/uploads/baggerloop',
    ]);

        Activity::updateOrCreate([
            'title' => 'Oosterplas Dance Off',
            'description' =>
                'Jaarlijks vindt er in de lente onze alom bekende danswedstrijd plaats.
                Er kan meegedaan in groepen, tweetallen maar natuurlijk ook solo,
                De dansstijl is vrij, dus schrijf je vooral in!',
            'datetimestart' => '2017-05-31 17:00:00',
            'datetimeend' => '2017-05-31 22:00:00',
            'price' => '15',
            'image' => '/images/uploads/dance',
        ]);
    }
}
