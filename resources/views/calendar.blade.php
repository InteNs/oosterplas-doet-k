@extends('layouts.default')
@section('content')
    <div class="container">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
       <script>
           function redirect (calEvent, jsEvent, view) {
               window.location.href = "/beheer/activiteit/" +calEvent.id;
           }

           function tooltip(calEvent, element) {
               element.qtip({
                   content: "Klik hier voor meer informatie!"
               });
           }
       </script>

    </div>
    <div class="container">

    </div>
@endsection