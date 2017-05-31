@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Verander een activiteit</h1>
        </div>

        {!! Form::model($activity, array('url' => array('/beheer/activiteit', $activity->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}
        <div class="form-group row">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', $activity->title, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', $activity->description, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('sorting_date', 'Sorteerdatum') !!}
            {!! Form::datetime('sorting_date', $activity->sorting_date, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('display_date', 'Weergavedatum') !!}
            {!! Form::datetime('display_date',$activity->display_date, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('price', 'Prijs') !!}
            {!! Form::text('price', $activity->price, ['class' => 'form-control', 'step' => 'any', 'min' => 0]) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload nieuwe
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="form-group row">
            Oude afbeelding:
            <img src="{{$activity->image}}" class="img-responsive">
        </div>

        <div class="row">
            {!! Form::submit('Verander de activiteit!', array('class' => 'btn btn-primary', 'id' => 'editSubmit')   ) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
