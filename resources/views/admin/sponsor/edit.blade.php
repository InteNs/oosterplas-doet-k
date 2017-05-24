@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Verander een sponsor</h1>
        </div>

        {!! Form::model($sponsor, array('url' => array('/beheer/sponsor', $sponsor->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}
        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', $sponsor->name, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', $sponsor->description, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('rank', 'Rank') !!}
            {!! Form::number('rank', $sponsor->rank, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('link', 'Link naar de huidige website') !!}
            {!! Form::text('link', $sponsor->link, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload nieuwe
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="form-group row">
            Oude afbeelding:
            <img src="{{$sponsor->image}}" class="img-responsive">
        </div>

        <div class="row">
            {!! Form::submit('Verander een sponsor!', array('class' => 'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection