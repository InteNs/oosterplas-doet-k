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
            <div class="col-sm-12 col-md-6">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Site Activiteit</h3>
                    </div>
                    <img src="https://sites.google.com/site/oefensitekennisbasistoets/_/rsrc/1411740323605/begrippen/grafiek/grafiek%201.jpg" alt="...">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Doelgroepverdeling</h3>
                    </div>
                    <img src="http://img.clickonf5.org/it/5WaysToCreatePieChartsandGraphsOnline_B269/gogle_docs_pie_thumb.gif" alt="...">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Browser usage</h3>
                    </div>
                    <img src="http://img.clickonf5.org/it/5WaysToCreatePieChartsandGraphsOnline_B269/gogle_docs_pie_thumb.gif" alt="...">
                </div>
            </div>
            {{--<div class="col-sm-12 col-md-6">--}}
                {{--<div class="thumbnail">--}}
                    {{--<div class="caption">--}}
                        {{--<h3>Lorum Ipsum</h3>--}}
                    {{--</div>--}}
                    {{--<img src="https://conceptdraw.com/a2064c3/p1/preview/640/pict--vertical-bar-chart-bar-charts---vector-stencils-library.png--diagram-flowchart-example.png" alt="...">--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
