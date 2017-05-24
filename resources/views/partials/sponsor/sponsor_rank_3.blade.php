<div class="col-md-4 col-xs-12 partial_rang_three">
    <div class="col-md-12 col-xs-12 text-center" >
        <a href="{{$sponsorsRank3->link}}">
            <img class="rang_three_img" src="{{($sponsorsRank3->image != '') ? $sponsorsRank3->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
        </a>
    </div>
    <div class="col-md-12 col-xs-12">
        <h4>
            {{$sponsorsRank3->name}}
        </h4>
        <p>
            {{$sponsorsRank3->description}}
        </p>
    </div>
</div>