@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Abonnees
        </h3>

        <table class="table table-striped table-hover ">
            <tr>
                <td>Emailadres</td>
                <td></td>
            </tr>
            @foreach ($subscribers as $subscriber)
                <tr>
                    <td>{{$subscriber->email}}</td>
                    @if(Auth::user()->isAdmin)
                        <td>
                            {{ Form::open(['id' => 'formDelete'.$subscriber->id,'method' => 'DELETE', 'route' => ['abonnee.destroy', $subscriber->id]]) }}
                            <a title="Delete" href="javascript:void(0)"
                               onclick="document.getElementById('formDelete{{$subscriber->id}}').submit()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            {{ Form::close() }}
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>

        {!! Form::open(['id' => 'export', 'method' => 'POST',  'action' => 'Admin\SubscriberController@export']) !!}

        {!! Form::submit('Export naar .txt', ['id' => 'exportButton', 'class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
    {{ $subscribers->appends(request()->input())->links() }}

@endsection
