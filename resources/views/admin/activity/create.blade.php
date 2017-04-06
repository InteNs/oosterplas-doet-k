@extends('layouts.dashdefault')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Creëer een activiteit</h1>
        </div>

        {!! Form::open(array('url' => 'beheer/activiteit', 'method' => 'POST', 'files'=>true)) !!}

        <div class="form-group row">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('date', 'Datum') !!}
            {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('category_id', 'Category ID') !!}
            {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
            {{--TODO: categories from DB--}}
        </div>

        <div class="form-group row">
            {!! Form::label('price', 'Prijs') !!}
            {!! Form::number('price', 0, ['class' => 'form-control', 'step' => 'any', 'min' => 0]) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="row">
            {!! Form::submit('Creëer de activiteit!', array('class' => 'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
