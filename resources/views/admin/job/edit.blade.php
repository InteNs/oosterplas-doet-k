@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Wijzig een vacature</h1>
        </div>

        {!! Form::model($job, array('url' => array('beheer/job', $job->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}
        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', $job->name, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', $job->description, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('places', 'Aantal banen') !!}
            {!! Form::text('places', $job->places, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('online', 'Online') !!}
            {!! Form::checkbox('online',  $job->online, $job->online) !!}
        </div>

        <div class="row">
            {!! Form::submit('Verander de vacature!', array('class' => 'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
