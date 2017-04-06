@extends('layouts.default')

@section('content')
<div class="no-padding slider">
    <div class="slideshow">
        <img class="slideshow-img" src="{{url('images/backgroundimg.jpg')}}">
        <img class="slideshow-img" src="{{url('images/backgroundimg2.jpg')}}">
        <img class="slideshow-img" src="{{url('images/backgroundimg3.jpg')}}">
    </div>
    <img class="logo" src="{{url('images/logo.png')}}">
</div>
<!-- Block 1 -->
<div class="container-fluid block-1">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="title">We halen samen meer uit onze wijk!</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <span class="home-text">
                Stichting OosterplasDOET! is er als wijkonderneming in de wijken ‘s-Hertogenbosch Oost en Hintham om mensen en
                organisaties te verbinden. Dit doen we door het coördineren en stimuleren van activiteiten op het gebied van
                onderwijs, arbeid, sport, cultuur en zorg & welzijn. Met als speerpunten huiswerkbegeleiding en gunbanen.
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 info-block">
            <div class="img" style="background-image: url('{{url('/images/huiswerkbegeleiding.jpg')}}');"></div>
            <h3>Huiswerkbegeleiding</h3>
            <span class="info">
                De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren
                en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen. Je leert plannen en je krijgt begeleiding
                om je brugklas jaar goed aan te pakken.
                Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker te ontspannen of juist even te
                bewegen om daarna met hernieuwd concentratie weer verder te gaan.
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
        <div class="col-md-6 info-block">
            <div class="img" style="background-image: url('{{url('/images/gunbaan.jpg')}}');"></div>
            <h3>Gunbanen</h3>
            <span class="info">
                Gunbanen zijn tijdelijke opstapbanen voor jongeren in een uitkeringssituatie. Iedereen tussen de 18 en 27 jaar,
                thuiswonend of alleenstaand met of zonder kinderen, kan zich hiervoor aanmelden. We hebben diverse werkplaatsen
                waar je ervaring op kunt doen, waar je je CV mee in beweging kunt houden en mogelijk kan leiden tot een vaste baan
                bij hen of via hun netwerk. Ben jij, of ken je iemand die in een dergelijke situatie zit neem dan contact met ons op.
                We helpen je graag verder.
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Block 2 -->
<div class="container-fluid block-2">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="title">Highlights activiteiten</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/baggerloop.jpg')}}');"></div>
            <h3>Baggerloop/B-battle</h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
                KEFO en B-battle voor alle wijkbewoners/
                Bosschenaren, Baggerloop voor 7 basisscholen in
                Den Bosch Oost en Hintham en 5 middelbare scholen.
                Dit zijn juist 5 middelbare scholen waar veel kinderen/
                jongeren op zitten die niet actief deelnemen aan een
                sportvereniging en vaak ook een “rugzakje” hebben.
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/KEFO.png')}}');"></div>
            <h3>KEFO</h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
                Het Kom Erbij Festival Oosterplas kende vorig jaar
                een mooie eerste editie. Daarmee is de toon gezet
                voor een buurtfestival dat zich ieder jaar verder zal
                ontwikkelen. Met de allure van lokaal talent
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/natuurwandeling.png')}}');"></div>
            <h3>Wandelen in de natuur (65+) </h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
                In goed gezelschap met een natuurgids de leuke
                groene routes van Den Bosch ontdekken!
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <a href="/" class="read-more">
                Bekijk de volledige evenements kalender >
            </a>
        </div>
    </div>
</div>
<!-- Rainbow -->
<div class="rainbow no-padding">
    <img class="home-img" src="images/rainbow.png">
</div>
<!-- Large image -->
<div class="no-padding">
    <img class="home-img" src="images/welcome.jpg">
</div>
<!-- Block 3 -->
<div class="container-fluid block-3">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="title">Activiteiten reportages</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/baggerloop.jpg')}}');"></div>
            <h3>Baggerloop/B-battle</h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
               KEFO en B-battle voor alle wijkbewoners/
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/KEFO.png')}}');"></div>
            <h3>KEFO</h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
                Het Kom Erbij Festival Oosterplas kende vorig jaar
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/natuurwandeling.png')}}');"></div>
            <h3>Wandelen in de natuur (65+) </h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
                In goed gezelschap met een natuurgids de leuke
                groene routes van Den Bosch ontdekken!
            </span>
            <div class="continue-reading">
                <a href="/">
                    Lees verder >
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <a href="/" class="read-more">
                Bekijk alle reportages >
            </a>
        </div>
    </div>
</div>
<!-- Rainbow Large -->
<div class="rainbow no-padding">
    <img class="home-img" src="images/rainbow.png">
</div>
<script>
    // Slider script
    var width = $( window ).width();
    $( "div.slideshow" ).children().css( "width", width );

    setInterval(function() {
        var size = $("div.slideshow").children().length;
        if (size < 2) {
            return;
        } else {
            var left = parseInt($("div.slideshow").css('left'));
            if ( (size - 1) * (width * -1)< left) {
                $( "div.slideshow" ).css( "left", left - width);
            } else {
                $( "div.slideshow" ).css( "left", 0);
            }
        }
    }, 5000);
</script>
@endsection