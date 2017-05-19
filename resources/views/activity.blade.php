@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
        </div>
        <div class="row rang_one">
            <div class="col-md-10 col-md-offset-1">
                <div class="row partial_rang_one">
                <div class="row">
                    <div class="col-md-12">
                        <img class="rang_one_img" src="{{$activity->image}}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            {{$activity->title}}
                        </h3>
                        <p>
                            {{$activity->description}}
                        </p>
                    </div>
                </div>
                    <div class="row">
                        <button class="btn, btn-md">
                            Schrijf je nu in!
                        </button>
                    </div>
             </div>
            </div>
        </div>
    </div>
@endsection
