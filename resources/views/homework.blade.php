@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <img src="{{url($activity->image)}}" style="max-width:100px;"><br>
        {!! nl2br($activity->description) !!}
        <br><br>
    </div>
    <div class="col-sm-12 col-md-10">
        <div class="row">

            <div class="col-sm-12 col-md-8">
                {!! Form::open(array('id' => 'contact_form', 'method' => 'POST', 'action' => 'HomeworkController@store', 'class' => 'well form-horizontal', 'style' => 'height: 500px;')) !!}
                <fieldset>
                    <!-- Form Name -->
                    <legend>Schrijf je in voor huiswerkbegeleiding!</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Voornaam</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="firstname" placeholder="Voornaam" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Achternaam</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="lastname" placeholder="Achternaam" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="E-mailadres" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Telefoonnummer</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="phone" placeholder="0612345678" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                @if (session('status'))
                    <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">Success <i
                                    class="glyphicon glyphicon-thumbs-up"></i> Uw aanmelding voor huiswerkbegeleiding
                            is succesvol verzonden. Er zal spoedig contact met u worden opgenomen.
                        </div>
                @endif

                <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            {!! Form::submit('Stuur', array('class' => 'btn btn-warning', 'id' => 'createSubmit')) !!}
                        </div>
                    </div>

                </fieldset>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#contact_form').bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    firstname: {
                        validators: {
                            stringLength: {
                                min: 2,
                                message: 'Vul tenminste 2 karakters in'
                            },
                            notEmpty: {
                                message: 'Vul alstublieft uw voornaam in'
                            }
                        }
                    },
                    lastname: {
                        validators: {
                            stringLength: {
                                min: 2,
                                message: 'Vul tenminste 2 karakters in'
                            },
                            notEmpty: {
                                message: 'Vul alstublieft uw achternaam in'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Vul alstublieft uw emailadres in'
                            },
                            emailAddress: {
                                message: 'Vul alstublieft een geldig emailadres in'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            phone: {
                                country: 'NL',
                                message: 'Vul alstublieft een geldig telefoonnummer in'
                            }
                        }
                    },
                }
            })
        });
    </script>
@endsection