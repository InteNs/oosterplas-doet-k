@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>{{$message->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Email:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$message->email}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Telefoonnummer:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$message->phone}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Tekst:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$message->text}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Aangemaakt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$message->created_at}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Gewijzigd op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$message->updated_at}}</h4>
            </div>
        </div>
    </div>
@endsection
