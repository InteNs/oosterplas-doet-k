@extends('layouts.main')
@section('content')
    <div class="container-fluid more-padding">
        <div class="row">
            <div class="col-xs-12">
                <H1>Vacatures</H1>
            </div>
        </div>
    </div>


            <div class="container-fluid partners-block-1 more-padding">
                <div class="row">
            @foreach($jobs as $job)
                <div class="col-xs-12 partial_rang_two info-block">
                    <div class="text-block3">
                        <h3>{{$job->name}}</h3>
                        <span class="info-vacature">
                           {{$job->description}}
                        </span>
                        <div class="continue-reading3">
                            <a href="/contact">
                                Neem contact op voor de vacature >
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
