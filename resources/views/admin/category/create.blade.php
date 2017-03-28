@extends('layouts.dashdefault')

@section('content')
	<h1>Creëer een categorie</h1>

	{!! Form::open(array('url' => 'beheer/categorie', 'method' => 'POST', 'files'=>true)) !!}

	<div class="form-group">
		{!! Form::label('title', 'Titel') !!}
		{!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Beschrijving') !!}
		{!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
	</div>

	{!! Form::submit('Creëer de categorie!', array('class' => 'btn btn-primary')) !!}

	{!! Form::close() !!}
@endsection