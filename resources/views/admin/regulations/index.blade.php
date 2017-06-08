@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Statuten
        </h3>
        <div class="filters">
            <a href="/beheer/statuten?order=name&direction=asc" title="Order op titel ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/statuten?order=name&direction=desc" title="Order op titel DESC"><i
                        class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
            <a href="/beheer/statuten?order=date&direction=asc" title="Order op datum ASC"><i
                        class="fa fa-sort-numeric-asc" aria-hidden="true"></i></a>
            <a href="/beheer/statuten?order=date&direction=desc" title="Order op datum DESC"><i
                        class="fa fa-sort-numeric-desc" aria-hidden="true"></i></a>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Naam</td>
                <td>Datum</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($regulations as $regulation)
                <tr>
                    <td>{{$regulation->id}}</td>
                    <td>{{$regulation->name}}</td>
                    <td>{{$regulation->date}}</td>
                    <td>
                        <a href="/beheer/statuten/{{$regulation->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/statuten/{{$regulation->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$regulation->id,'method' => 'DELETE', 'route' => ['statuten.destroy', $regulation->id]]) }}
                            <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$regulation->id}}').submit()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $regulations->appends(request()->input())->links() }}
@endsection
