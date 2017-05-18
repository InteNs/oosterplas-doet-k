@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Voeg een medewerker toe</h1>
        </div>

        {!! Form::open(array('url' => 'beheer/employee', 'method' => 'POST', 'files'=>true, 'class' => 'createForm')) !!}

        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="row">
            {!! Form::submit('Voeg de medewerker toe!', array('class' => 'btn btn-primary', 'id' => 'createSubmit')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection