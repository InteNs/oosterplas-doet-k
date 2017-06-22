@extends('layouts.main')

@section('content')
<div class="no-padding slider">
    <div class="slideshow">
        @for ($t = 1; $t < 10; $t++)
            @if ($slider->{'image'.$t} !== null)
                <div class="slideshow-img" style="background-image: url('{{url($slider->{'image'.$t})}}');"></div>
            @endif
        @endfor
    </div>
    <img class="logo" src="{{url($slider->logo)}}">
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
                onderwijs, arbeid, sport, cultuur en zorg & welzijn. Met als speerpunten studiebegeleiding en gunbanen.
            </span>
        </div>
    </div>
    <div class="row">
        @foreach ($spotlights as $spotlight)
            <div class="col-md-6 info-block">
                <div class="img" style="background-image: url({{$spotlight->image}});"></div>
                <div class="text-block1">
                    <h3>{{$spotlight->title}}</h3>
                    <span class="info">
                        {{$spotlight->description}}
                    </span>
                    <div class="continue-reading1">
                        <a href="/activiteiten/{{$spotlight->id}}">
                            Lees verder >
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
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
        @foreach($activities as $activity)
            @include("partials.activity.activity", ['activity' => $activity])
        @endforeach
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="/" class="read-more">
                    Bekijk de volledige evenementen kalender >
                </a>
            </div>
        </div>
    </div>
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
            <div class="text-block3">
            <h3>Baggerloop/B-battle</h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
               KEFO en B-battle voor alle wijkbewoners/
            </span>
            <div class="continue-reading3">
                <a href="/">
                    Lees verder >
                </a>
            </div>
            </div>
        </div>
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/KEFO.png')}}');"></div>
            <div class="text-block3">
            <h3>KEFO</h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
                Het Kom Erbij Festival Oosterplas kende vorig jaar
            </span>
            <div class="continue-reading3">
                <a href="/">
                    Lees verder >
                </a>
            </div>
            </div>
        </div>
        <div class="col-md-4 info-block">
            <div class="img" style="background-image: url('{{url('/images/natuurwandeling.png')}}');"></div>
            <div class="text-block3">
            <h3>Wandelen in de natuur (65+) </h3>
            <h4 class="date">
                10 en 11 juni
            </h4>
            <span class="info">
                In goed gezelschap met een natuurgids de leuke
                groene routes van Den Bosch ontdekken!
            </span>
            <div class="continue-reading3">
                <a href="/">
                    Lees verder >
                </a>
            </div>
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
