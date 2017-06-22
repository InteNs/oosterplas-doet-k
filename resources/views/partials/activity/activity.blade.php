<div class="col-md-4 info-block">
    <div class="img" style="background-image: url('{{url($activity->image)}}');"></div>
    <div class="text-block2">
        <h3>{{$activity->title}}</h3>
        <h4 class="date">
           {{$activity->display_date}}
        </h4>
        <span class="info">
               {{$activity->description}}
            </span>
        <div class="continue-reading2">
            <a href="/activiteiten/{{$activity->id}}">
                Lees verder >
            </a>
        </div>
    </div>
</div>