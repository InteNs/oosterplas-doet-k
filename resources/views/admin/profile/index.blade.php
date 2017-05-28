@extends('layouts.admin')

@section('content')
    <h1>{{ $user->name }}</h1>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button onclick="location.href='profiel/email';" class="btn btn-primary">
                Reset wachtwoord
            </button>
        </div>
    </div>
@stop