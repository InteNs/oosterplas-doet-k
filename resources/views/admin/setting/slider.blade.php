@extends('layouts.admin')

@section('content')
    <div class="container sliders">
        <div class="row">
            <div class="col-md-12">
                <h1>Website slider</h1>
            </div>
        </div>
        {!! Form::model($slider, array('url' => array('/beheer/setting/slider'), 'method' => 'PUT', 'files'=>true, 'class' => 'editForm')) !!}

        <div class="form-group row">
            <div class="col-md-12">
                <label for="logo">Upload nieuwe
                    logo:</label> {!! Form::file('logo', ['class' => 'form-control', 'accept' => 'image/*']) !!}
                <p class="errors">{!! $errors->first('logo') !!}</p>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                Huidige logo:
                <img src="{{$slider->logo}}" class="img-responsive lightgray">
            </div>
        </div>

        @for ($i = 1; $i < 10; $i++)
            <div class="image-group">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="logo">Upload nieuwe
                            slider afbeelding nr. {{$i}}:</label> {!! Form::file('image'.$i, ['class' => 'form-control', 'accept' => 'image/*']) !!}
                        <p class="errors">{!! $errors->first('image'.$i) !!}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        Huidige slider image nr. {{$i}}:
                        @if ($slider->{'image'.$i} !== null)
                            <img src="{{ $slider->{'image'.$i} }}" class="img-responsive">
                            <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$i}}').submit()">
                                Verwijder deze afbeelding
                            </a>
                        @else
                            geen afbeelding
                        @endif
                    </div>
                </div>
            </div>
        @endfor

        <div class="row">
            <div class="col-md-12">
            {!! Form::submit('Wijzigingen toepassen!', array('class' => 'btn btn-primary')) !!}
            </div>
        </div>
        {!! Form::close() !!}
        @for ($i = 1; $i < 10; $i++)
            @if ($slider->{'image'.$i} !== null)
                {{ Form::open(['id' => 'formDelete'.$i,'method' => 'DELETE', 'route' => ['beheer.setting.slider', $i]]) }}
                {{ Form::close() }}
            @endif
        @endfor
        <br>
    </div>
@endsection
