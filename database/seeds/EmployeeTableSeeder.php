<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::updateOrCreate([
            'name' => 'Karin van Gent (bestuurslid)',
            'description' => 'Ik ben Brabantse van origine, want geboren in Eindhoven. Na 30 jaar Utrecht woon ik nu sinds 2011 in Den Bosch, aan de heerlijke Oosterplas. Met man en hond geniet wij van de levendigheid van de wijk Oost en van alle Bossche gezelligheid. Muziek maken in diverse orkesten is mijn grote hobby. Beroepsmatig ben ik als psycholoog werkzaam in de ouderenpsychiatrie: een intensief en mooi beroep. Als vrijwilliger zet ik me in voor OosterplasDOET!, want ik voel me betrokken bij mijn omgeving en wat daarin gebeurt. Dit werk geeft me een verdiepende kijk op het levendige sociale- en maatschappelijke gebeuren in de wijk en het is absoluut de moeite waard om daaraan een actieve bijdrage te leveren.',
            'image' => 'https://cdn.empowernetwork.com/user_images/post/2013/04/01/d/c5/204e/540_293_resize_20130401_dc5204e2d0bd0cf5e14275b049ffd314_jpg.jpg',
        ]);

        Employee::updateOrCreate([
            'name' => 'Peter van Peperstraten (bestuurslid)',
            'description' => 'Wonend met mijn gezin aan de Oosterplas en van plan om hier nog zo lang als mogelijk te blijven wonen, werken en actief bezig te zijn, zowel sportief als op andere gebieden.
Mijn beroep is zelfstandig architect en probeer met mijn ontwerpen een bijdrage te leveren aan een gezonde en duurzame leefomgeving.
Sportief houd ik me bezig met zeilen, voetbal en fitness. Daarbij ben ik actief lid van de Zeilvereniging Oosterplas en voetbalvereniging sv BLC waar ik het damesvoetbal een vaste plek heb gegeven binnen de vereniging.
Van 2005 t/m 2009 was ik betrokken bij de werkgroep Oosterplas om het toenmalige enigszins verwaarloosde en sociaal onveilige Oosterplas gebied te vitaliseren tot een verkeersluwe en veilige plek voor iedereen die daar recreatief, voor ontspanning, sportief of andere doeleinden gebruik van maakt. Aangezien er geen vervolg is gekomen voor een verdere ontwikkeling van het gebruik van het Oosterplas gebied heb ik me in het najaar van 2013 aangesloten bij OosterplasDoet!, inmiddels stichting OosterplasDoet!, Hier vervul ik, als afgevaardigde van Zeilvereniging Oosterplas, de rol van penningmeester binnen het stichtingsbestuur. Een fijne groep mensen die enthousiast bezig zijn met maatschappelijke sportieve en culturele projecten in de wijk.
Voor mij is hiermee het cirkeltje rond voor een zinvol bestaan in de wijk als bewoner binnen de gemeenschap van de wijk Oost en Hintham.',
            'image' => 'https://cdn.empowernetwork.com/user_images/post/2013/04/01/d/c5/204e/540_293_resize_20130401_dc5204e2d0bd0cf5e14275b049ffd314_jpg.jpg',
        ]);

        Employee::updateOrCreate([
            'name' => 'Cees Corstanje (bestuurslid)',
            'description' => 'Vanaf het moment dat onze beide dochters naar Basisschool De Vlieger gingen, ben ik op de wijk Hintham georiënteerd. En inmiddels al meer dan 25 jaar woonachtig en actief in die prachtige leefomgeving.
Met in het noorden het groene Sportpark De Vliert, in het midden de plas Het IJzeren Kind en rivier de Aa en met de Oosterplas in het zuiden hebben de wijken Oost en Hintham van de stad ’s-Hertogenbosch mij veel te bieden. Graag geef ik iets terug.
In stichting OosterplasDOET! ben ik als secretaris actief. Ik vind het belangrijk om met een groep enthousiaste mensen in teamverband te werken aan het nog mooier maken van Oost en Hintham. Je medewijkbewoners leren kennen en elkaar helpen, wonen en werken op elkaar afstemmen en je geborgen voelen en weten in een bruisende wijk zijn belangrijke waarden voor mij. Daarvoor wil ik me graag inzetten.',
            'image' => 'https://cdn.empowernetwork.com/user_images/post/2013/04/01/d/c5/204e/540_293_resize_20130401_dc5204e2d0bd0cf5e14275b049ffd314_jpg.jpg',
        ]);

        Employee::updateOrCreate([
            'name' => 'Monique Bolder (bestuurslid)',
            'description' => 'Hintham Zuid is voor mij al sinds oktober 2002 mijn vaste woonplek met mijn man en gaande weg mijn steeds groter groeiende gezin. Hintham is voor mij ideaal als Stad georiënteerde vrouw die ook houdt van rust om zich heen. We hebben hier op Hintham alles in de buurt. Van de binnenstad van ‘s-Hertogenbosch tot aan de dorpskern van Rosmalen is er genoeg te beleven en heb je alles bij de hand. Met de Oosterplas als een prachtig sportief en ontspannende kern waar ik graag een wandeling met de hond maak of ga recreëren met mijn gezin.
Sinds januari 2016 ben ik een van de bestuursleden van Oosterplas Doet! Op uitnodiging door mijn activiteiten in een werkgroep voor de wijk ben ik hier terecht gekomen in een warm en betrokken team. Door mijn drukke baan als directeur kinderopvang en mijn altijd bezige gezin met 4 kinderen is het voor mij niet goed mogelijk om actief mee te organiseren. Daarom fungeer ik als denktank en door mijn affiniteit met social media verzorg ik grotendeels de PR en Communicatie voor Oosterplas Doet. Deze website is daar een onderdeel van. Zo kan ik mijn rol enigszins op afstand goed combineren en hiermee iets betekenen voor onze wijk.',
            'image' => 'https://cdn.empowernetwork.com/user_images/post/2013/04/01/d/c5/204e/540_293_resize_20130401_dc5204e2d0bd0cf5e14275b049ffd314_jpg.jpg',
        ]);

        Employee::updateOrCreate([
            'name' => 'Ingrid Nijskens (adviseur)',
            'description' => 'Halverwege de jaren 70 heb ik vanuit mijn opleiding kennis gemaakt met de wijk Oost, de wijk waar de zon op komt. Ik raakte enthousiast over de wijze waarop er daar gewerkt werd door [wijlen] opbouwwerker Piet Willems en een groep jonge mensen die later samen met wijkbewoners Samen Beter hebben opgericht, een gezondheidscentrum door en voor wijkbewoners.
Het samenwerken met bewoners, met hun ideeën als uitgangspunt en dit ondersteunen was èn is mij uit het hart gegrepen. In de jaren 80 ben ik dan ook actief geworden in de wijk en in Hintham komen wonen. Aanvankelijk was ik bij gezondheidscentrum Samen Beter actief. Maar later ook bij wijkkrant Oost, wijkplatform Oost en vele andere activiteiten in de wijk. Ik was in de loop der jaren tot nu soms in meer en dan weer mindere mate, actief als vrijwilliger in de wijk Oost.
Ik heb dit vrijwilligerswerk altijd gecombineerd met mijn betaalde werk en de opvoeding van onze drie geweldige meiden. Dit laatste uiteraard met mijn partner. Drie jaar geleden ben ik betrokken geraakt ėn gebleven bij het burgerinitiatief OosterplasDOET! De toekenning van de financiële middelen uit het Maatschappelijke Initiatieven Fonds (MIF) van de gemeente, is voor mij een blijk van waardering voor de inzet voor en betrokkenheid bij OosterplasDOET van alle betrokkenen!
Om tal van redenen, o.a. mijn verhuizing naar Rosmalen, ben ik mijn activiteiten in Oost grotendeels aan het loslaten. Ik ben in mijn eigen wijk betrokken bij het burgerinitiatief ‘Bij Bomans’. Daarnaast ben ik lid van de Adviesraad WMO en Jeugdhulp, een adviesorgaan van onze gemeente.
Ik koester warme herinneringen aan Oost, het Samen Beter van weleer, de wijkkrant en het Wijkplatform. En niet in de laatste plaats aan Buurthuis Graafsewijk Noord, een fijne plek, waar je altijd welkom bent.
Om na bijna 30 jaar helemaal niets meer met Oost te ‘hebben’, is ook niets. Daarnaast heb ik o.a. in Oost een groot en goed netwerk opgebouwd. Om die redenen blijf ik als adviseur betrokken bij OosterplasDOET!',
            'image' => 'https://cdn.empowernetwork.com/user_images/post/2013/04/01/d/c5/204e/540_293_resize_20130401_dc5204e2d0bd0cf5e14275b049ffd314_jpg.jpg',
        ]);

        Employee::updateOrCreate([
            'name' => 'Mieke van der Sanden (kwartiermaker)',
            'description' => 'Wonend met mijn man en hond bij de Oosterplas in Den Bosch Oost geniet ik al 35 jaar van dit pareltje in de wijk. Spelend met de kinderen op het strand toen ze nog klein waren, of lopend met de honden om de plas om ze uit te laten, of in gedachte, lachend of huilend met familie/vrienden om even in alle rust bij te praten.
Ik hou van de natuur en als het enigszins kan vind je mij op vakantie in de bergen. Van Himalaya, Andes tot de Alpen en vervolgens weer terug naar het rondje met het hondje om de “Plas”.
Ik ken Den Bosch Oost en Hintham als wijken waar “ons-ons” kent en waar ik graag met de buurt wil kijken hoe we onze wijken ook de komende jaren nog mooier kunnen maken voor en met elkaar.
Als kwartiermaker van OosterplasDOET! ben ik regelmatig te vinden in sociaal cultureel centrum de Biechten waar we onze vaste locatie hebben in de zaal Picasso, waar ik ook weer veel ouders van vroeger tegenkom wiens kinderen op de “oude Vlieger” hebben gezeten. Het is fantastisch om met zulke actieve en bevlogen buurtbewoners in een stichting actief te zijn. Ik hoop dit als kwartiermaker of als bestuurslid nog jaren te kunnen doen.',
            'image' => 'https://cdn.empowernetwork.com/user_images/post/2013/04/01/d/c5/204e/540_293_resize_20130401_dc5204e2d0bd0cf5e14275b049ffd314_jpg.jpg',
        ]);

    }
}
