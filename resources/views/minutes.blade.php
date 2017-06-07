@extends('layouts.main')
@section('content')

    <div class="row">
            <div class="input-group custom-search-form" style="margin-left: 50px">
                <div class="form-group row">
                    {!! Form::open(['method'=>'GET', 'class'=>'navbar-form navbar-left', 'role'=>'search']) !!}
                        {!! Form::date('date', null, ['class' => 'form-control']) !!}
                        <span class="input-group-btn">
                            <button class="btn btn-default-sm" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    {!! Form::close() !!}
                </div>
            </div>


        <div class="input-group custom-search-form" style="margin-left: 50px">
            <div class="form-group row">
                {!! Form::open(['method'=>'GET', 'class'=>'navbar-form navbar-left', 'role'=>'search']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Naam...']) !!}
                    <span class="input-group-btn">
                        <button class="btn btn-default-sm" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                {!! Form::close() !!}
            </div>
        </div>


    </div>

    <div class="row">
        @foreach($minutesList as $minutes)
            <div class="col-md-4 info-block" style="margin-bottom:5px; margin-left: 5px;">
                <object data="{{$minutes->minutes}}"
                        width="450px" height="400px">
                </object>
            </div>
        @endforeach
    </div>

@endsection