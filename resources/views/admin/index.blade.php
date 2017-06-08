@extends('layouts.admin')

@section('content')
    <div class="dashboard col-sm-12 col-md-10">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>URL</th>
                            <th>Aantal bezoeken</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pagecounts as $pagecount)
                            <tr>
                                <td><a title="{{$pagecount->url}}" href="{{$pagecount->url}}">{{$pagecount->url}}</a></td>
                                <td>{{$pagecount->count}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
