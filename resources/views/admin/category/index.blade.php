@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="overview-title">
            Categorieen
        </h3>

        <div class="filters">
            <a href="/beheer/categorie?order=title&direction=asc" title="Order op titel ASC"><i
                        class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
            <a href="/beheer/categorie?order=title&direction=desc" title="Order op titel DESC"><i
                        class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
        </div>

        <table class="table table-striped table-hover ">
            <tr>
                <td>#</td>
                <td>Titel</td>
                <td>Omschrijving</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="/beheer/categorie/{{$category->id}}"
                           title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/beheer/categorie/{{$category->id}}/edit"
                           title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        {{ Form::open(['id' => 'formDelete'.$category->id,'method' => 'DELETE', 'route' => ['categorie.destroy', $category->id]]) }}
                            <a title="Delete" href="javascript:void(0)" onclick="document.getElementById('formDelete{{$category->id}}').submit()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $categories->appends(request()->input())->links() }}
@endsection
