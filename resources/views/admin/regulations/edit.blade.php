@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Verander statuten</h1>
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

        {!! Form::model($regulation, array('url' => array('beheer/statuten', $regulation->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}

        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', $regulation->name, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('date', 'Datum') !!}
            {!! Form::date('date', $regulation->date, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('regulation', 'Upload nieuwe statuten') !!}
            {!! Form::file('regulation', ['class' => 'form-control', 'accept' => 'application/pdf']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('regulation', 'Huidige statuten') !!}
            <br>
            <object data="{{$regulation->regulation}}"
                    width="450px" height="400px">
            </object>
        </div>

        <div class="row">
            {!! Form::submit('Verander de statuten!', array('class' => 'btn btn-primary button-submit', 'id' => 'editSubmit')   ) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
