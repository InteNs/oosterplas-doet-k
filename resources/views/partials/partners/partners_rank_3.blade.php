<div class="col-md-4 col-xs-12 partial_rang_three">
    <div class="col-md-12 col-xs-12" >
        <a href="{{$partnerRank3->link}}">
            <img class="rang_three_img" src="{{($partnerRank3->image != '') ? $partnerRank3->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
        </a>
    </div>
    <div class="col-md-12 col-xs-12">
        <h4>
            {{$partnerRank3->name}}
        </h4>
        <p>
            {{$partnerRank3->description}}
        </p>
    </div>
</div>