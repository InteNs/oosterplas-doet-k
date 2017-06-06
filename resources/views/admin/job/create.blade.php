@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Voeg een vacature toe</h1>
        </div>

        {!! Form::open(array('url' => 'beheer/job', 'method' => 'POST', 'files'=>true, 'class' => 'createForm')) !!}

        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('places', 'Aantal banen') !!}
            {!! Form::text('places', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('online', 'Online') !!}
            {!! Form::checkbox('online', true, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="row">
            {!! Form::submit('Voeg de vacature toe!', array('class' => 'btn btn-primary', 'id' => 'createSubmit')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection