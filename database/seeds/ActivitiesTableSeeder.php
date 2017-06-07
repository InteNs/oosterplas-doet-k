<?php

use App\Activity;
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
            'title' => 'Studiebegeleiding',
            'description' =>
                'De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken.
Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
Tijden: elke dinsdag en donderdag professionele begeleiding van Studiejunk van 15.00-18.00

Tarieven worden vastgesteld bij aanmelding. Dit wordt gebaseerd op het gezamenlijk bruto jaarinkomen:
Bij een inkomen lager dan 18.500,- betaal je € 20,- per maand
Bij een inkomen tussen de 18.500,- en 37.000,- betaal je € 80,-  per maand
Bij een inkomen hoger dan 37.000,- betaal je € 160,- per maand',
            'sorting_date' => '2017-12-31 00:00:00',
            'display_date' => 'Iedere dinsdag en donderdag!',
            'price' => '0',
            'image' => '/images/huiswerkbegeleiding.jpg',
            'priority' => true,
        ]);

        Activity::updateOrCreate([
            'title' => 'Natuurwandeling',
            'description' =>
                'De flora en fauna langs onze Oosterplas is deze tijd van het jaar in volle glorie te bewonderen.
                Meld je nu aan voor deze bijzondere wandeling met onze eigen gids!',
            'sorting_date' => '2017-08-06 00:00:00',
            'display_date' => '6 augustus!',
            'price' => '0',
            'image' => '/images/natuurwandeling.png',
            'priority' => false,
        ]);

        Activity::updateOrCreate([
            'title' => 'Kom Erbij Festival Oosterplas',
            'description' =>
                'Het Kom Erbij Festival Oosterplas kende vorig jaar een mooie eerste editie. 
            Daarmee is de toon gezet voor een buurtfestival dat zich ieder jaar verder zal ontwikkelen. 
            Met de allure van lokaal talent',
            'sorting_date' => '2017-07-08 00:00:00',
            'display_date' => '8 juli',
            'price' => '20',
            'image' => '/images/KEFO.png',
            'priority' => false,
        ]);

        Activity::updateOrCreate([
            'title' => 'BAGGERLOOP/B-BATTLE',
            'description' =>
                'KEFO en B-battle voor alle wijkbewoners/ Bosschenaren, 
            Baggerloop voor 7 basisscholen in Den Bosch Oost en Hintham en 5 middelbare scholen. 
            Dit zijn juist 5 middelbare scholen waar veel kinderen/ jongeren op zitten die niet actief deelnemen aan een sportvereniging 
            en vaak ook een “rugzakje” hebben.',
            'sorting_date' => '2017-12-12 00:00:00',
            'display_date' => '12 december',
            'price' => '0',
            'image' => '/images/baggerloop.jpg',
            'priority' => false,
        ]);

        Activity::updateOrCreate([
            'title' => 'Oosterplas Dance Off',
            'description' =>
                'Jaarlijks vindt er in de lente onze alom bekende danswedstrijd plaats.
                Er kan meegedaan in groepen, tweetallen maar natuurlijk ook solo,
                De dansstijl is vrij, dus schrijf je vooral in!',
            'sorting_date' => '2017-06-10 00:00:00',
            'display_date' => '10 juni',
            'price' => '15',
            'image' => '/images/dance.jpg',
            'priority' => false,
        ]);
    }
}
