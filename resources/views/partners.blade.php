@extends('layouts.main')
@section('content')
    <!--
    /// change block to specify partners
    /// auto generate
     // make class with auto generate
    /// make partials
    /// add css file
    -->
    <div class="container-fluid partners-block-1">
        <div class="row">
            <div class="col-md-12">
                <H1>Partners</H1>
            </div>
        </div>


            <div class="row rang_one">
                <div class="col-md-10 col-md-offset-1">
                    @foreach($partnersRank1 as $partnerRank1)
                         @include("partials.partners.partners_rank_1", ['partnersRank1' => $partnersRank1])
                    @endforeach
                </div>
            </div>
    </div>
        <div class="container-fluid partners-block-2">
            <div class="row rang_two">
                <br/>
                <div class="col-md-10 col-md-offset-1">
                    @foreach($partnersRank2 as $partnerRank2)
                        @include("partials.partners.partners_rank_2", ['partnersRank2' => $partnersRank2])
                    @endforeach
                </div>
            </div>
        </div>
    <div class="container-fluid partners-block-3">

            <div class="row rang_three">
                <div class="col-md-10 col-md-offset-1">
                    @foreach($partnersRank3 as $partnerRank3)
                        @include("partials.partners.partners_rank_3", ['partnersRank3' => $partnersRank3])
                    @endforeach
                </div>
            </div>
        </div>
@endsection
