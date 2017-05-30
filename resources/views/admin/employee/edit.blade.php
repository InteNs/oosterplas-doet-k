@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Wijzig een medewerker</h1>
        </div>

        {!! Form::model($employee, array('url' => array('beheer/employee', $employee->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}
        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', $employee->name, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', $employee->description, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload nieuwe
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="form-group row">
            Oude afbeelding:
            <img src="{{$employee->image}}" class="img-responsive">
        </div>

        <div class="row">
            {!! Form::submit('Verander de medewerker!', array('class' => 'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
