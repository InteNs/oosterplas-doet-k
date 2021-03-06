@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Upload nieuwe notulen</h1>
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

        {!! Form::open(array('url' => 'beheer/notulen', 'method' => 'POST', 'files'=>true, 'class' => 'createForm')) !!}

        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', null,['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('date', 'Datum') !!}
            {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('minutes', 'Upload notulen') !!}
            {!! Form::file('minutes', ['class' => 'form-control', 'accept' => 'application/pdf', 'required']) !!}
        </div>

        <div class="row">
            {!! Form::submit('Upload de notulen!', array('class' => 'btn btn-primary button-submit', 'id' => 'createSubmit')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
