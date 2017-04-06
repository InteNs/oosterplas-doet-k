@extends('layouts.default')
@section('content')
    <div class="container">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
    </div>
    <div class="container">

    </div>
@endsection