@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Schrijf een rapportage!</h1>
        </div>

        {!! Form::open(array('url' => 'beheer/rapportage', 'method' => 'POST', 'files'=>true, 'class' => 'createForm')) !!}
        <div class="form-group row">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('message', 'Beschrijving') !!}
            {!! Form::text('message', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="row">
            {!! Form::submit('Creëer de rapportage!', array('class' => 'btn btn-primary', 'id' => 'createSubmit')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
