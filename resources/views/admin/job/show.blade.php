@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>{{$job->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Omschrijving:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$job->description}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="places">Aantal banen:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$job->places}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="online">Online:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$job->online}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Aangemaakt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$job->created_at}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Gewijzigd op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$job->updated_at}}</h4>
            </div>
        </div>
    </div>
@endsection
