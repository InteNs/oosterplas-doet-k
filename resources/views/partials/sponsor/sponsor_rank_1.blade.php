<div class="row partial_rang_one">
    <div class="row">
        <div class="col-xs-12 ">
            <a href="{{$sponsorsRank1->link}}">
                <img class="rang_one_img" src="{{($sponsorsRank1->image != '') ? $sponsorsRank1->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>
                {{$sponsorsRank1->name}}
            </h3>
            <p>
                {{$sponsorsRank1->description}}
            </p>
        </div>
    </div>
</div>