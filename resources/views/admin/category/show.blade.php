@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>{{$category->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Omschrijving:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$category->description}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Aangemaakt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$category->created_at}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Gewijzigd op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$category->updated_at}}</h4>
            </div>
        </div>
    </div>
@endsection
