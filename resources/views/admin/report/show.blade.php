@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h4><label for="message">Activiteit:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$report->getActivityTitle()}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="message">Beschrijving:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$report->message}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Afbeelding:</label></h4>
            </div>
            <div class="col-md-6">
                <img src="{{$report->image}}" class="img-responsive">
            </div>
        </div>
    </div>
@endsection
