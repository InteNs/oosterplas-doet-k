@extends('layouts.main')
@section('content')
        <div class="container-fluid block-3">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="title">Evenementen</h2>
                    </div>
                </div>
            @foreach($activities as $activity)
                        <div class="col-md-4 info-block">
                            <div class="img" style="background-image: url({{$activity->image}});"></div>
                            <div class="text-block3">
                                <h3>  {{$activity->title}}</h3>
                                <h4 class="date">
                                    {{$activity->datetimestart}}
                                </h4>
                                <span class="info">
                                   {{$activity->description}}
                                </span>
                                <div class="continue-reading3">
                                    <a href="/">
                                        Reportage bekijken? >
                                    </a>
                                </div>
                            </div>
                        </div>
                @endforeach

        </div>



@endsection

