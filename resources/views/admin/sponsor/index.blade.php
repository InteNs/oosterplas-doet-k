@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Sponsors
        </h3>
        <div class="filters">
            <a href="/beheer/sponsor?order=rank&direction=asc" title="Order op rank ASC"><i
                        class="fa fa-sort-numeric-asc" aria-hidden="true"></i></a>
            <a href="/beheer/sponsor?order=rank&direction=desc" title="Order op rank DESC"><i
                        class="fa fa-sort-numeric-desc" aria-hidden="true"></i></a>
            <a href="/beheer/sponsor?order=name&direction=asc" title="Order op naam ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/sponsor?order=name&direction=desc" title="Order op naam DESC"><i
                        class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Naam</td>
                <td>Link</td>
                <td>Rank</td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($sponsors as $sponsor)
                <tr>
                    <td>{{$sponsor->id}}</td>
                    <td>{{$sponsor->name}}</td>
                    <td>{{$sponsor->link}}</td>
                    <td>{{$sponsor->rank}}</td>
                    <td>
                        <a href="/beheer/sponsor/{{$sponsor->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/sponsor/{{$sponsor->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$sponsor->id,'method' => 'DELETE', 'route' => ['sponsor.destroy', $sponsor->id]]) }}
                        <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$sponsor->id}}').submit()">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $sponsors->appends(request()->input())->links() }}
@endsection