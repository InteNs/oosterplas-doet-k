<div class="col-md-12 col-xs-12 partial_rang_two">
    <div class="bg">
        <div class="row">
            <a class="col-md-3 col-xs-12" href="{{$partner->link}}" title="{{$partner->name}}">
                <div class="rang_two_img" style="background-image: url('{{($partner->image != '') ? url($partner->image) : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}');"></div>
            </a>
            <div class="col-md-9 col-xs-12 partners-block-2-partial-text">
                <h4>
                    {{$partner->name}}
                </h4>
                <p>
                    {{$partner->description}}
                </p>
            </div>
        </div>
    </div>
</div>