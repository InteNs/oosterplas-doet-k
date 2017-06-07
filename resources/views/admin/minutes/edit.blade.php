@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Verander notulen</h1>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($minutes, array('url' => array('beheer/notulen', $minutes->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}

        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', $minutes->name, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('date', 'Datum') !!}
            {!! Form::date('date', $minutes->date, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('minutes', 'Upload nieuwe Notulen') !!}
            {!! Form::file('minutes', ['class' => 'form-control', 'accept' => 'minutes/*']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('minutes', 'Huidige Notulen') !!}
            <br>
            <object data="{{$minutes->minutes}}"
                    width="450px" height="400px">
            </object>
        </div>

        <div class="row">
            {!! Form::submit('Verander de notulen!', array('class' => 'btn btn-primary', 'id' => 'editSubmit')   ) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
