@extends('layouts.dashdefault')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Activiteiten
        </h3>
        <div class="filters">
            <a href="/beheer/activiteit?order=date&direction=asc" title="Order op datum ASC"><i
                        class="fa fa-sort-numeric-asc" aria-hidden="true"></i></a>
            <a href="/beheer/activiteit?order=date&direction=desc" title="Order op datum DESC"><i
                        class="fa fa-sort-numeric-desc" aria-hidden="true"></i></a>
            <a href="/beheer/activiteit?order=title&direction=asc" title="Order op titel ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/activiteit?order=title&direction=desc" title="Order op titel DESC"><i
                        class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Titel</td>
                <td>Prijs</td>
                <td>Datum</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($activities as $activity)
                <tr>
                    <td>{{$activity->id}}</td>
                    <td>{{$activity->title}}</td>
                    <td class="glyphicon-euro">{{$activity->price}}</td>
                    <td>{{$activity->date}}</td>
                    <td>
                        <a href="/beheer/activiteit/{{$activity->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/activiteit/{{$activity->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="javascript:checkDelete({{$activity->id}});"
                           title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $activities->appends(request()->input())->links() }}
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
                url: '/beheer/activiteit/' + id,
                data: {_token: token},
                success: function (data) {

                }
            });

            window.location.href = "/beheer/activiteit";
        }
    </script>

@endsection
