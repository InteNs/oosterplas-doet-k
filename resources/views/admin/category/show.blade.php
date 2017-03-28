@extends('layouts.dashdefault')

@section('content')
	<h1>
		{{$category->title}}
	</h1>
	{{$category->description}}<br>
	Aangemaakt op: {{$category->created_at}}<br>
	Bijgewerkt op: {{$category->updated_at}}<br>
@endsection