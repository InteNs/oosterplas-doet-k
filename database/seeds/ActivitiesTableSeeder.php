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
                'De begeleiding helpt je om je studie goed te kunnen volgen, 
                je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen. 
                Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. 
                Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker te ontspannen 
                of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.',
            'sorting_date' => '2017-12-31 00:00:00',
            'display_date' => 'Iedere dinsdag en donderdag!',
            'price' => '0',
            'image' => '/images/huiswerkbegeleiding.jpg',
            'priority' => true,
        ]);

        Activity::updateOrCreate([
            'title' => 'Gunbaan',
            'description' =>
                'Gunbanen zijn tijdelijke opstapbanen voor jongeren in een uitkeringssituatie. Iedereen tussen de 18 en 27 jaar,
                thuiswonend of alleenstaand met of zonder kinderen, kan zich hiervoor aanmelden. We hebben diverse werkplaatsen
                waar je ervaring op kunt doen, waar je je CV mee in beweging kunt houden en mogelijk kan leiden tot een vaste baan
                bij hen of via hun netwerk. Ben jij, of ken je iemand die in een dergelijke situatie zit neem dan contact met ons op.
                We helpen je graag verder.',
            'sorting_date' => '2017-12-30 00:00:00',
            'display_date' => 'Verbreed je netwerk!',
            'price' => '0',
            'image' => '/images/gunbaan.jpg',
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
