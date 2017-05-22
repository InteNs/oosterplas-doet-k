@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Berichten
        </h3>

        <table class="table table-striped table-hover ">
            <tr>
                <td>Naam</td>
                <td>Emailadres</td>
                <td>Telefoonnummer</td>
                <td>Tekst</td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($messages as $message)
                <tr>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->phone}}</td>
                    <td>{{$message->text}}</td>
                    <td>
                        <a href="/beheer/bericht/{{$message->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    @if(Auth::user()->isAdmin)
                        <td>
                            {{ Form::open(['id' => 'formDelete'.$message->id,'method' => 'DELETE', 'route' => ['bericht.destroy', $message->id]]) }}
                            <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$message->id}}').submit()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            {{ Form::close() }}
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>

    </div>
    {{ $messages->appends(request()->input())->links() }}

@endsection
