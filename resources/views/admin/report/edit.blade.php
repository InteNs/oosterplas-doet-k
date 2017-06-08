@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Verander een rapportage</h1>
        </div>

        {!! Form::model($report, array('url' => array('/beheer/rapportage', $report->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}
        <div class="form-group row">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', $report->title, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('message', 'Beschrijving') !!}
            {!! Form::text('message', $report->message, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            <label for="image">Upload nieuwe
                afbeelding:</label> {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*']) !!}
            <p class="errors">{!! $errors->first('image') !!}</p>
        </div>

        <div class="form-group row">
            Oude afbeelding:
            <img src="{{$report->image}}" class="img-responsive">
        </div>

        <div class="row">
            {!! Form::submit('Verander de rapportage!', array('class' => 'btn btn-primary', 'id' => 'editSubmit')   ) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
