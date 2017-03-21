@extends('layouts.dashdefault')

@section('content')
    <h1>
        {{$activity->title}}
    </h1>
    {{$activity->description}}<br>
    Datum: {{$activity->date}}<br>
    Category ID: {{$activity->category_id}}<br>
    Prijs: {{$activity->price}}<br>
    Afbeelding: {{$activity->image}}<br>
    <img src="{{$activity->image}}">
    Aangemaakt op: {{$activity->created_at}}<br>
    Bijgewerkt op: {{$activity->updated_at}}<br>
@endsection
