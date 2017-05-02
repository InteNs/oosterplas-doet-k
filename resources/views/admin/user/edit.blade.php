@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Verander een gebruiker</h1>
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

    {!! Form::model($user, array('url' => array('/beheer/gebruiker', $user->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}

    <div class="form-group row">
        {!! Form::label('name', 'Naam') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group row">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', $user->email, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="row">
        {!! Form::submit('Verander de gebruiker!', array('class' => 'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
@endsection
