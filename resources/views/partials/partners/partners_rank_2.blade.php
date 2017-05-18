<div class="row partial_rang_two">
    <div class="col-md-3 col-xs-12">
        <a href="{{$partnerRank2->link}}">
            <img class="rang_two_img" src="{{($partnerRank2->image != '') ? $partnerRank2->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
        </a>
    </div>
    <div class="col-md-9 col-xs-12 partners-block-2-partial-text">
        <h4>
            {{$partnerRank2->name}}
        </h4>
        <p>
            {{$partnerRank2->description}}
        </p>
    </div>
</div>