@extends('layouts.main')
@section('content')
    <div class="container-fluid more-padding">
        <div class="row">
            <div class="col-xs-12">
                <H1>Over ons</H1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <img class="img-responsive" src="http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/DSC07482-e1471786208127.jpg"/>
            </div>
        </div>
    </div>
    <div class="container-fluid more-padding">
        <div class="row">
            @foreach($employees as $employee)
                @include("partials.employee.employees", ['employees' => $employees])
            @endforeach
        </div>
    </div>
@endsection
