@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Creëer een categorie</h1>
        </div>

        {!! Form::open(array('url' => 'beheer/categorie', 'method' => 'POST', 'files'=>true)) !!}

        <div class="form-group row">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="row">
            {!! Form::submit('Creëer de categorie!', array('class' => 'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
