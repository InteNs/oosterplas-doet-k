@extends('layouts.dashdefault')

@section('content')
    <h1>Verander een activiteit</h1>

    {!! Form::model($activity, array('url' => array('/beheer/activiteit', $activity->id), 'method' => 'PUT', 'files'=>true)) !!}

    <div class="form-group">
        {!! Form::label('title', 'Titel') !!}
        {!! Form::text('title', $activity->title, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Beschrijving') !!}
        {!! Form::text('description', $activity->description, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('date', 'Datum') !!}
        {!! Form::date('date', $activity->date, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category ID') !!}
        {!! Form::number('category_id', $activity->category_id, ['class' => 'form-control']) !!}
        {{--TODO: categories from DB--}}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Prijs') !!}
        {!! Form::text('price', $activity->price, ['class' => 'form-control', 'step' => 'any', 'min' => 0]) !!}
    </div>

    <div class="form-group">
        Oude afbeelding:
        <img src="{{$activity->image}}">
    </div>

    <div class="form-group">
        <label for="image">Upload nieuwe
            afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
        <p class="errors">{!! $errors->first('image') !!}</p>
    </div>

    {!! Form::submit('Verander de activiteit!', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@endsection
