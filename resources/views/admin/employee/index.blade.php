@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Medewerkers
        </h3>
        <div class="filters">
            <a href="/beheer/employee?order=name&direction=asc" title="Order op naam ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/employee?order=name&direction=desc" title="Order op naam DESC"><i
                        class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Naam</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>
                        <a href="/beheer/about/{{$employee->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/about/{{$employee->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$employee->id,'method' => 'DELETE', 'route' => ['employee', $employee->id]]) }}
                        <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$employee->id}}').submit()">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $employees->appends(request()->input())->links() }}
@endsection