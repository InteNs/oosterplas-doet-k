@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Verander een partner</h1>
        </div>

        {!! Form::model($partner, array('url' => array('/beheer/partner', $partner->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}
        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', $partner->name, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', $partner->description, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('link', 'Link naar de huidige website') !!}
            {!! Form::text('link', $partner->link, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload nieuwe
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="form-group row">
            Oude afbeelding:
            <img src="{{$partner->image}}" class="img-responsive">
        </div>

        <div class="row">
            {!! Form::submit('Verander de partner!', array('class' => 'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
