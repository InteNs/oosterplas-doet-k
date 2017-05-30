@extends('layouts.admin')

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
                <td>Begintijd</td>
                <td>Eindtijd</td>
                <td>Inschrijvingen</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($activities as $activity)
                <tr>
                    <td>{{$activity->id}}</td>
                    <td>{{$activity->title}}</td>
                    <td class="glyphicon-euro">{{$activity->price}}</td>
                    <td>{{$activity->datetimestart}}</td>
                    <td>{{$activity->datetimeend}}</td>
                    <td>{{$activity->getNumberOfEntries()}}</td>
                    <td>
                        <a href="/beheer/activiteit/{{$activity->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/activiteit/{{$activity->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        @if ($activity->id !== 1)
                            {{ Form::open(['id' => 'formDelete'.$activity->id,'method' => 'DELETE', 'route' => ['activiteit.destroy', $activity->id]]) }}
                                <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$activity->id}}').submit()">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $activities->appends(request()->input())->links() }}
@endsection
