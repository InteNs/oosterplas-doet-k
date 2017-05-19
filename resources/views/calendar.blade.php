@extends('layouts.main')
@section('content')
    <div class="calendar">
    <div class="container">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
       <script>
           function redirect (calEvent, jsEvent, view) {
               window.location.href = "/activiteit/" +calEvent.id;
           }

           function tooltip(calEvent, element) {
               element.qtip({
                   content: "Klik hier voor meer informatie!"
               });
           }
       </script>

    </div>
    </div>
    <div class="container">

    </div>
@endsection
