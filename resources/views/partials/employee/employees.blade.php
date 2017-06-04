<div class="col-md-12 partial_employee">
    <div class="employee-bg">
        <div class="row">
            <div class="col-md-4 col-xs-12 text-center">
                <div class="user-img" style="background-image: url('{{( $employee->image != '') ? url($employee->image) : 'http://english.tw/wp-content/themes/qaengine/img/default-thumbnail.jpg'}}')"></div>
            </div>
            <div class="col-md-8 col-xs-12 employee-text">
                <h4>
                    {{$employee->name}}
                </h4>
                <p>
                    {{$employee->description}}
                </p>
            </div>
        </div>
    </div>
</div>