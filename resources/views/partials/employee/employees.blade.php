<div class="col-md-6 col-xs-12 partial_employee">
    <div class="col-md-12 col-xs-12 text-center" >
        <img class="rang_three_img" src="{{( $employee->image != '') ? $employee->image : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}" />
    </div>
    <div class=" col-xs-12">
        <h4>

            {{$employee->name}}
        </h4>
        <p>
            {{$employee->description}}
        </p>
    </div>
</div>