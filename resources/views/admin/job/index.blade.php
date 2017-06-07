@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Vacatures
        </h3>
        <div class="filters">
            <a href="/beheer/job?order=name&direction=asc" title="Order op naam ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/job?order=name&direction=desc" title="Order op naam DESC"><i
                        class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Naam</td>
                <td>Online</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{$job->id}}</td>
                    <td>{{$job->name}}</td>
                    <td>{{$job->online}}</td>
                    <td>
                        <a href="/beheer/job/{{$job->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/job/{{$job->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$job->id,'method' => 'DELETE', 'route' => ['job.destroy', $job->id]]) }}
                        <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$job->id}}').submit()">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $jobs->appends(request()->input())->links() }}
@endsection