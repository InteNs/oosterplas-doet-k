@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>{{$regulation->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Datum:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$regulation->date}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Statuten:</label></h4>
            </div>
            <object data="{{$regulation->regulation}}"
                    width="450px" height="400px">
            </object>
        </div>
    </div>
@endsection
