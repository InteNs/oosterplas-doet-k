@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Voornaam:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$homework->firstname}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Achternaam:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$homework->lastname}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Email:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$homework->email}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Telefoonnummer:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$homework->phone}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Aangemaakt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$homework->created_at}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Gewijzigd op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$homework->updated_at}}</h4>
            </div>
        </div>
    </div>
@endsection
