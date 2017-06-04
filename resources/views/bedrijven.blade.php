@extends('layouts.main')
@section('content')
    <div class="container-fluid partners-block-1 more-padding">
        <div class="row">
            <div class="col-xs-12">
                <H1>Sponsors</H1>
            </div>
        </div>
        <div class="row">
            @foreach($sponsorRank1 as $sponsorsRank1)
                 @include("partials.sponsor.sponsor_rank_1", ['sponsorRank1' => $sponsorRank1])
            @endforeach
        </div>
    </div>
    <div class="container-fluid partners-block-2 more-padding">
        <div class="row">
            @foreach($sponsorRank2 as $sponsorsRank2)
                @include("partials.sponsor.sponsor_rank_2", ['sponsorRank2' => $sponsorRank2])
            @endforeach
        </div>
    </div>
    <div class="container-fluid partners-block-3 more-padding">
        <div class="row">
            @foreach($sponsorRank3 as $sponsorsRank3)
                @include("partials.sponsor.sponsor_rank_3", ['sponsorRank3' => $sponsorRank3])
            @endforeach
        </div>
    </div>
    <div class="container-fluid partners-block-2 partner-background more-padding">
        <div class="row">
            <div class="col-xs-12">
                <H1>Partners</H1>
            </div>
        </div>
        <div class="row">
            @foreach($partners as $partner)
                @include("partials.partner.partners", ['partners' => $partners])
            @endforeach
        </div>
    </div>
@endsection
