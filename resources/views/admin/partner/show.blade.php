@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>{{$partner->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Omschrijving:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$partner->description}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="link">Link:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$partner->link}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="rank">Rank:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$partner->rank}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Afbeelding:</label></h4>
            </div>
            <div class="col-md-6">
                <img src="{{$partner->image}}" class="img-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Aangemaakt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$partner->created_at}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Gewijzigd op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$partner->updated_at}}</h4>
            </div>
        </div>
    </div>
@endsection
