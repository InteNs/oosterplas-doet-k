<div class="col-md-4 col-xs-12 partial_rang_three">
    <div class="bg">
        <div class="row">
            <a class="col-md-12 col-xs-12 text-center" href="{{$sponsorsRank3->link}}" title="{{$sponsorsRank3->name}}">
                <div class="rang_three_img" style="background-image: url('{{($sponsorsRank3->image != '') ? url($sponsorsRank3->image) : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}');"></div>
            </a>
            <div class="col-md-12 col-xs-12 sponsors-text">
                <h4>
                    {{$sponsorsRank3->name}}
                </h4>
                <p>
                    {{$sponsorsRank3->description}}
                </p>
            </div>
        </div>
    </div>
</div>
