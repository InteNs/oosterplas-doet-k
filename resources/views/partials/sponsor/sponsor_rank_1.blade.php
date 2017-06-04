<div class="col-xs-12 partial_rang_one">
    <div class="bg">
        <div class="row">
            <a class="col-xs-12 col-md-3" href="{{$sponsorsRank1->link}}" title="{{$sponsorsRank1->name}}">
                <div class="rang_one_img" style="background-image: url('{{($sponsorsRank1->image != '') ? url($sponsorsRank1->image) : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}');"></div>
            </a>
            <div class="col-xs-12 col-md-9">
                <h3>
                    {{$sponsorsRank1->name}}
                </h3>
                <p>
                    {{$sponsorsRank1->description}}
                </p>
            </div>
        </div>
    </div>
</div>