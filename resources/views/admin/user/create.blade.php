@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Creëer een gebruiker</h1>
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

        {!! Form::open(array('url' => 'beheer/gebruiker', 'method' => 'POST', 'files'=>true, 'class' => 'createForm')) !!}

        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('email', 'Emailadres') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('password', 'Wachtwoord') !!}
            {!! Form::text('password', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="row">
            {!! Form::submit('Creëer de gebruiker!', array('class' => 'btn btn-primary', 'id' => 'createSubmit')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
