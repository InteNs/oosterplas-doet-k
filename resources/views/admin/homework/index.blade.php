@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Huiswerkbegeleiding
        </h3>

        <table class="table table-striped table-hover ">
            <tr>
                <td>Voornaam</td>
                <td>Achternaam</td>
                <td>Emailadres</td>
                <td>Telefoonnummer</td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($homeworks as $homework)
                <tr>
                    <td>{{$homework->firstname}}</td>
                    <td>{{$homework->lastname}}</td>
                    <td>{{$homework->email}}</td>
                    <td>{{$homework->phone}}</td>
                    <td>
                        <a href="/beheer/huiswerk/{{$homework->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    @if(Auth::user()->isAdmin)
                        <td>
                            {{ Form::open(['id' => 'formDelete'.$homework->id,'method' => 'DELETE', 'route' => ['huiswerk.destroy', $homework->id]]) }}
                            <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$homework->id}}').submit()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            {{ Form::close() }}
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>

    </div>
    {{ $homeworks->appends(request()->input())->links() }}

@endsection
