<div class="row partial_rang_two">
    <div class="col-md-3 col-xs-12">
        <a href="{{$partner->link}}">
            <img class="rang_two_img" src="{{($partner->image != '') ? $partner->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
        </a>
    </div>
    <div class="col-md-9 col-xs-12 partners-block-2-partial-text">
        <h4>
            {{$partner->name}}
        </h4>
        <p>
            {{$partner->description}}
        </p>
    </div>
</div>