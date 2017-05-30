@extends('layouts.admin')

@section('content')
    <h1>{{ $user->name }}</h1>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <a href="profiel/reset" class="btn btn-primary button-reset">
                Reset wachtwoord
            </a>
        </div>
    </div>
@stop