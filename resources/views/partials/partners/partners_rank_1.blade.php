<div class="row partial_rang_one">
    <div class="row">
        <div class="col-xs-12 ">
            <a href="{{$partnerRank1->link}}">
                <img class="rang_one_img" src="{{($partnerRank1->image != '') ? $partnerRank1->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>
                {{$partnerRank1->name}}
            </h3>
            <p>
                {{$partnerRank1->description}}
            </p>
        </div>
    </div>
</div>