@extends('layouts.main')
@section('content')
    <div class="container-fluid block-1">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-1">
                <H1>Over ons</H1>
            </div>
        </div>
        <div class="row rang_one">
            <div class="col-xs-10 col-xs-offset-1">
                <img class="img-responsive" src="http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/DSC07482-e1471786208127.jpg"/>
            </div>
        </div>

    </div>
    <div class="container-fluid block-1">
        <div class="row rang_two">
            <br/>
            <div class="col-xs-10 col-xs-offset-1">

                @foreach($employees as $employee)
                    @include("partials.employee.employees", ['employees' => $employees])
                @endforeach
            </div>
        </div>
    </div>

@endsection
