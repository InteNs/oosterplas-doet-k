@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Website settings</h1>
        </div>
        {!! Form::model($setting, array('url' => array('/beheer/setting'), 'method' => 'PUT', 'files'=>false, 'class' => 'editForm')) !!}

        <div class="form-group row">
            {!! Form::label('name', 'Naam') !!}
            {!! Form::text('name', $setting->{'name'}, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('address', 'Adres') !!}
            {!! Form::text('address', $setting->address, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('zipcode', 'Postcode') !!}
            {!! Form::text('zipcode', $setting->zipcode, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', $setting->email, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('RSIN-number', 'RSIN nummer') !!}
            {!! Form::text('RSIN-number', $setting->{'RSIN-number'}, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('KvK-number', 'KvK nummer') !!}
            {!! Form::text('KvK-number', $setting->{'KvK-number'}, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('SBI-code', 'SBI-code') !!}
            {!! Form::text('SBI-code', $setting->{'SBI-code'}, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('account-number', 'Rekeningnummer') !!}
            {!! Form::text('account-number', $setting->{'account-number'}, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="row">
            {!! Form::submit('Verander de settings!', array('class' => 'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
