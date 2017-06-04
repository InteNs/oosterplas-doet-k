<div class="col-md-12 col-xs-12 partial_rang_two">
    <div class="bg">
        <div class="row">
            <a class="col-md-3 col-xs-12" href="{{$sponsorsRank2->link}}" title="{{$sponsorsRank2->name}}">
                <div class="rang_two_img" style="background-image: url('{{($sponsorsRank2->image != '') ? url($sponsorsRank2->image) : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}');"></div>
            </a>
            <div class="col-md-9 col-xs-12 partners-block-2-partial-text">
                <h4>
                    {{$sponsorsRank2->name}}
                </h4>
                <p>
                    {{$sponsorsRank2->description}}
                </p>
            </div>
        </div>
    </div>
</div>