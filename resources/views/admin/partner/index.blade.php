@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Partners
        </h3>
        <div class="filters">
            <a href="/beheer/partner?order=rank&direction=asc" title="Order op rank ASC"><i
                        class="fa fa-sort-numeric-asc" aria-hidden="true"></i></a>
            <a href="/beheer/partner?order=rank&direction=desc" title="Order op rank DESC"><i
                        class="fa fa-sort-numeric-desc" aria-hidden="true"></i></a>
            <a href="/beheer/partner?order=name&direction=asc" title="Order op naam ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/partner?order=name&direction=desc" title="Order op naam DESC"><i
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
            @foreach ($partners as $partner)
                <tr>
                    <td>{{$partner->id}}</td>
                    <td>{{$partner->name}}</td>
                    <td>{{$partner->link}}</td>
                    <td>
                        <a href="/beheer/partner/{{$partner->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/partner/{{$partner->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$partner->id,'method' => 'DELETE', 'route' => ['partner.destroy', $partner->id]]) }}
                        <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$partner->id}}').submit()">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $partners->appends(request()->input())->links() }}
@endsection