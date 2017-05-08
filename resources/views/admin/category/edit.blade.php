@extends('layouts.admin')

@section('content')
    <div class="container">
    {!! Form::model($category, array('url' => array('/beheer/categorie', $category->id), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}

        <div class="form-group row">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', $category->title, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('description', 'Beschrijving') !!}
            {!! Form::text('description', $category->description, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="row">
            {!! Form::submit('Verander de categorie!', array('class' => 'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
