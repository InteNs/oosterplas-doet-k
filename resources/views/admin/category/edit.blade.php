@extends('layouts.dashdefault')

@section('content')
	<h1>Verander een categorie</h1>

	{!! Form::model($category, array('url' => array('/beheer/categorie', $category->id), 'method' => 'PUT', 'files'=>true)) !!}

	<div class="form-group">
		{!! Form::label('title', 'Titel') !!}
		{!! Form::text('title', $category->title, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Beschrijving') !!}
		{!! Form::text('description', $category->description, ['class' => 'form-control', 'required']) !!}
	</div>

	{!! Form::submit('Verander de categorie!', array('class' => 'btn btn-primary')) !!}

	{!! Form::close() !!}
@endsection