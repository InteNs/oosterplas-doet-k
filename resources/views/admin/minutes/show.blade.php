@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>{{$minutes->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Datum:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$minutes->date}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Notulen:</label></h4>
            </div>
            <object data="{{$minutes->minutes}}"
                    width="450px" height="400px">
            </object>
        </div>
    </div>
@endsection
