@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>{{$activity->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Omschrijving:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->description}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Begint op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->datetimestart}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Eindigt op:</label></h4>
            </div>
            <div class="col-md-6">
                <h4>{{$activity->datetimeend}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="description">Prijs:</label></h4>
            </div>
            <div class="col-md-6">
                <h4 class="glyphicon-euro">{{$activity->price}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h4><label for="image">Afbeelding:</label></h4>
            </div>
            <div class="col-md-6">
                <img src="{{$activity->image}}" class="img-responsive">
            </div>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Voornaam</td>
                <td>Achternaam</td>
                <td>Telefoonnummer</td>
                <td>E-mailadres</td>
                <td></td>
            </tr>
            @foreach ($entries as $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->firstname}}</td>
                    <td>{{$entry->lastname}}</td>
                    <td>{{$entry->phone}}</td>
                    <td>{{$entry->email}}</td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$entry->id,'method' => 'DELETE', 'route' => ['entry.destroy', $entry->id]]) }}
                            <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$entry->id}}').submit()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
