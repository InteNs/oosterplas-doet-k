@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Rapportages
        </h3>
        <div class="filters">
            <a href="/beheer/rapportage?order=date&direction=asc" title="Order op datum ASC"><i
                        class="fa fa-sort-numeric-asc" aria-hidden="true"></i></a>
            <a href="/beheer/rapportage?order=date&direction=desc" title="Order op datum DESC"><i
                        class="fa fa-sort-numeric-desc" aria-hidden="true"></i></a>
            <a href="/beheer/rapportage?order=title&direction=asc" title="Order op titel ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/rapportage?order=title&direction=desc" title="Order op titel DESC"><i
                        class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Activiteit</td>
                <td>Titel</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($reports as $report)
                <tr>
                    <td>{{$report->id}}</td>
                    <td>{{$report->getActivityTitle()}}</td>
                    <td>{{$report->title}}</td>
                    <td>
                        <a href="/beheer/rapportage/{{$report->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/rapportage/{{$report->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$report->id,'method' => 'DELETE', 'route' => ['rapportage.destroy', $report->id]]) }}
                                <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$report->id}}').submit()">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $reports->appends(request()->input())->links() }}
@endsection
