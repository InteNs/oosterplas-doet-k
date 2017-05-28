<div class="row partial_rang_two">
    <div class="col-md-3 col-xs-12">
        <a href="{{$sponsorsRank2->link}}">
            <img class="rang_two_img" src="{{($sponsorsRank2->image != '') ? $sponsorsRank2->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
        </a>
    </div>
    <div class="col-md-9 col-xs-12 partners-block-2-partial-text">
        <h4>
            {{$sponsorsRank2->name}}
        </h4>
        <p>
            {{$sponsorsRank2->description}}
        </p>
    </div>
</div>