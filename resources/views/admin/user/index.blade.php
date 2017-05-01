@extends('layouts.admin')

@section('content')
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
                            <a href="javascript:checkDelete({{$user->id}});"
                               title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
    {{ $users->appends(request()->input())->links() }}
    <script>
        function checkDelete(id) {
            //Declaration
            var token = $('#token').val();
            var id = id;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //Delete request
            $.ajax({
                type: 'DELETE',
                url: '/beheer/gebruiker/' + id,
                data: {_token: token},
                success: function (data) {

                }
            });

            window.location.href = "/beheer/gebruiker";
        }
    </script>

@endsection
