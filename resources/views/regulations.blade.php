@extends('layouts.main')
@section('content')
<div class="container-fluid more-padding">
    <div class="row">
        <div class="col-md-12">
            <h1>Statuten</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="input-group custom-search-form search-responsive">
                <div class="form-group">
                    {!! Form::open(['method'=>'GET', 'class'=>'navbar-form navbar-left', 'role'=>'search']) !!}
                        {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Zoek op datum..']) !!}
                        <span class="input-group-btn">
                            <button class="btn btn-primary button-submit colored" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="input-group custom-search-form search-responsive">
                <div class="form-group">
                    {!! Form::open(['method'=>'GET', 'class'=>'navbar-form navbar-left', 'role'=>'search']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Zoek op naam..']) !!}
                        <span class="input-group-btn">
                            <button class="btn btn-primary button-submit colored" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($regulations as $regulation)
            <div class="col-md-6 info-block" style="margin-bottom:5px;">
                <object title="{{$regulation->name}}" type="application/pdf" data="{{$regulation->regulation}}"
                        width="100%" height="400px">
                </object>
            </div>
        @endforeach
    </div>
</div>
@endsection