@extends('layouts.dashdefault')

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
                <h4><label for="description">Categorie:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->category_id}}</h4>
                {{--TODO SHOW CATEGORIE--}}
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
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Aangemaakt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->created_at}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Gewijzigd op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->updated_at}}</h4>
            </div>
        </div>
    </div>
@endsection
