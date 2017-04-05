@extends('layouts.dashdefault')

@section('content')
	<h1>
		Titel: {{$category->title}}
	</h1>
	Beschrijving: {{$category->description}}<br>
	Aangemaakt op: {{$category->created_at}}<br>
	Bijgewerkt op: {{$category->updated_at}}<br>
@endsection