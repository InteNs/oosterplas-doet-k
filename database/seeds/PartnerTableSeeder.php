<?php

use App\Partner;
use Illuminate\Database\Seeder;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::updateOrCreate([
            'name' => 'Sociaal Cultureel Centrum de Biechten ',
            'description' => 'De Biechten faciliteert en denkt mee met allerlei activiteiten en het KEFO in het bijzonder',
            'rank' => '2',
            'link' => 'http://debiechten.nl/',
            'image' => 'http://debiechten.nl/wp-content/uploads/2015/03/logo.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Zeilvereniging Oosterplas ',
            'description' => 'De zeilvereniging is actief betrokken bij Oosterplas Doet door onder andere zitting te hebben in het bestuur van Oosterplas Doet en actief betrokken te zijn in de co-creatie rondom het KEFO',
            'rank' => '1',
            'link' => 'Zeilvereniging Oosterplas ',
        ]);

        Partner::updateOrCreate([
            'name' => '‘S-Port ',
            'description' => 'S-Port is hoofdorganisator van de Baggerloop tijdens het Kom Erbij Festival Oosterplas',
            'rank' => '3',
            'link' => 'http://www.s-port.nl/',
        ]);

        Partner::updateOrCreate([
            'name' => 'Gemeente ‘s-Hertogenbosch ',
            'description' => 'De gemeente is betrokken bij diverse activiteiten en ondersteund de Stichting wat bevestigd werd door de verkiezingen van de kamer van doen voor buurtinitiatieven',
            'rank' => '1',
            'link' => 'http://www.s-hertogenbosch.nl/',
            'image' => 'https://www.s-hertogenbosch.nl/typo3conf/ext/website_shertogenbosch/Resources/Public/Images/logoSmall.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Verzorgingstehuis Hof van Hintham',
            'description' => 'Bieden plek voor een Gunbaner en werken mee met Wandel je fit',
            'rank' => '3',
            'link' => 'http://www.vivent.nl/zorgcentra/vivent-hof-van-hintham/3/',
            'image' => 'https://www.vivent.nl/assets/img/logo.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Jongerencentrum De Poort ',
            'description' => 'leveren materialen zoals podium en geluid voor KEFO. Ze werken mee aan de organisatie van de huiswerk begeleiding',
            'rank' => '2',
            'link' => 'http://jc-de-poort.nl/',
            'image' => 'http://jc-de-poort.nl/wp-content/uploads/2014/06/poort_logo_groen2.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Vereniging Hambaken Gym  ',
            'description' => 'Ze werken mee aan de huiswerk begeleiding en verzorgen kickboxen voor vrouwen in Hintham',
            'rank' => '2',
            'link' => 'http://www.hambaken-gym.nl/',
            'image' => 'http://www.hambaken-gym.nl/wp-content/uploads/2015/02/cropped-YoussefH6.jpg',
        ]);

        Partner::updateOrCreate([
            'name' => 'WeenerXL',
            'description' => 'Zij werken mee aan het project gunbanen',
            'rank' => '3',
            'link' => 'https://www.weenerxl.nl/home/',
            'image' => 'https://www.weenerxl.nl/typo3conf/ext/website_weenerxl/Resources/Public/Images/logo-weenerxl.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Gezondheidscentrum Samen Beter ',
            'description' => 'Participeren in sportimpuls aanvraag',
            'rank' => '3',
            'link' => 'http://www.samenbeter.nl/home',
            'image' => 'https://www.samenbeter.nl/images/sitelogo.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Wijkraad Hintham ',
            'description' => 'Ze helpen actief mee met promotie en ondersteunen onze initiatieven op verschillende manieren',
            'rank' => '2',
            'link' => 'http://www.wijkraadhintham.nl/',
            'image' => 'http://www.wijkraadhintham.nl/images/logo.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Koning Willem 1 College',
            'description' => 'Zij zorgen voor stagiaires en helpen mee bij het opzetten van het Leerwerkbedrijf',
            'rank' => '3',
            'link' => 'https://www.kw1c.nl/',
            'image' => 'https://www.mediastages.nl/data/bedrijfslogo/KW1c_logo_rgb_B.RW.jpg',
        ]);

        Partner::updateOrCreate([
            'name' => 'Stichting Divers ',
            'description' => 'Zij werken actief mee met de huiswerk begeleiding',
            'rank' => '3',
            'link' => 'http://www.divers.nl/',
            'image' => 'http://www.divers.nl/files/logo/1/logo.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Dierentehuis Oosterplas',
            'description' => 'Dierentehuis Den Bosch werkt met name samen in de co-creatie rondom het KEFO',
            'rank' => '3',
            'link' => 'http://www.dierentehuisdenbosch.nl/',
            'image' => 'http://dierentehuisdenbosch.nl/wp-content/themes/_s-master/img/logo.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Titanic, modelboten club ',
            'description' => 'Titanic is onder andere betrokken in de co-creatie rondom het KEFO en stelt hun clubhuis ter beschikking als start- en eindpunt voor de activiteit: wandelen in de natuur',
            'rank' => '3',
            'link' => 'http://www.modelbotenclub-titanic.nl/',
            'image' => 'http://www.modelbotenclub-titanic.nl/images/website/artikelen/Logo%20Titanic_50.jpeg',
        ]);

        Partner::updateOrCreate([
            'name' => 'Hockeyclub ‘s-Hertogenbosch ',
            'description' => 'De hockeyclub is onder andere betrokken in de co-creatie rondom het KEFO. Zij stellen ruimte ter beschikking voor de organisatie. Daarnaast zijn zij partner in sportactiviteiten rondom de Oosterplas',
            'rank' => '2',
            'link' => 'http://www.hcdenbosch.nl/',
            'image' => 'https://pbs.twimg.com/profile_images/1373914372/logo_400x400.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Kind- en zorgboerderij Oosterhoeve ',
            'description' => 'Kind- en zorgboerderij Oosterhoeve is onder andere betrokken in de co-creatie rondom het KEFO',
            'rank' => '3',
            'link' => 'http://www.stichting-oosterhoeve.nl/',
            'image' => '',
        ]);

        Partner::updateOrCreate([
            'name' => 'Wladimirov – fitness & welness ',
            'description' => 'Wladimirov – fitness & welness is onder andere betrokken in de co-creatie rondom het KEFO',
            'rank' => '3',
            'link' => 'http://www.wladimirov.nl/',
            'image' => 'https://irp-cdn.multiscreensite.com/802b3a39/dms3rep/multi/tablet/Wlad-logo-06-1771x252.png',
        ]);

        Partner::updateOrCreate([
            'name' => 'Volkstuinen Oosterplas ',
            'description' => 'Volkstuinen Oosterplas is onder andere betrokken in de co-creatie rondom het KEFO',
            'rank' => '3',
            'link' => 'http://www.volkstuinendenbosch.nl',
            'image' => 'http://www.volkstuinendenbosch.nl/Logo%20federatie.JPG',
        ]);
        Partner::updateOrCreate([
            'name' => 'Medisch centrum Oost',
            'description' => 'Het medisch centrum Oost is betrokken ………….',
            'rank' => '3',
            'link' => 'http://www.denboschoost.nl/',
            'image' => 'http://denboschoost.nl/ontwerp/img/den-bosch-oost-mc-PMS-5513.jpg',
        ]);

        Partner::updateOrCreate([
            'name' => 'Tennisvereniging Oosterplas ',
            'description' => 'Tennisvereniging Oosterplas is regelmatig betrokken bij Oosterplas Doet',
            'rank' => '3',
            'link' => 'http://www.tvoosterplas.nl/',
            'image' => '',
        ]);

        Partner::updateOrCreate([
            'name' => 'Park Eemwijk',
            'description' => 'Deze ouderen zorgorganisatie (van Neynsel) is regelmatig betrokken bij Oosterplas Doet',
            'rank' => '3',
            'link' => ''
        ]);

        Partner::updateOrCreate([
            'name' => 'De dialoog ',
            'description' => 'De dialoog is betrokken bij Oosterplas Doet door ……………………….',
            'rank' => '3',
            'link' => '',
        ]);
        Partner::updateOrCreate([
            'name' => 'Toon Lef!',
            'description' => 'Mieke van der Sanden is het gezicht achter Toon Lef',
            'rank' => '3',
            'link' => 'http://www.toonlef.nl',
            'image' => 'http://toonlef.nl/wp-content/uploads/cropped-Logo101.png',
        ]);

    }
}
