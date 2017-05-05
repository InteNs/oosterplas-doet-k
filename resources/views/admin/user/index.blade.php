@extends('layouts.admin')

@section('content')
    @include('admin.user.modal')
    <div class="container">
        <h3 class="overview-title">
            Gebruikers
        </h3>

        <table class="table table-striped table-hover ">
            <tr>
                <td>Naam</td>
                <td>Emailadres</td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="/beheer/gebruiker/{{$user->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    @if(Auth::user()->isAdmin)
                        <td>
                            <a href="/beheer/gebruiker/{{$user->id}}/edit"
                               title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            {{ Form::open(['id' => 'formDelete'.$user->id,'method' => 'DELETE', 'route' => ['gebruiker.destroy', $user->id]]) }}
                            <a title="Delete" id="linkDel{{$user->id}}" href="javascript:void(0)" onclick="$('#conf').modal().on('click', '#delete-btn', function(){
                                    document.getElementById('formDelete{{$user->id}}').submit()
                                    });">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            {{ Form::close() }}
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>

    </div>
    {{ $users->appends(request()->input())->links() }}

@endsection
