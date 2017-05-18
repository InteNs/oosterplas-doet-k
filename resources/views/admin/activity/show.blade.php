@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>{{$activity->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Omschrijving:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->description}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Begint op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->datetimestart}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Eindigt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->datetimeend}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Prijs:</label></h4>
            </div>
            <div class="col-md-6">
                <h4 class="glyphicon-euro">{{$activity->price}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Afbeelding:</label></h4>
            </div>
            <div class="col-md-6">
                <img src="{{$activity->image}}" class="img-responsive">
            </div>
        </div>
    </div>
@endsection
