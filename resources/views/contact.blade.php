@extends('layouts.main')

@section('content')
    <div class="container-fluid more-padding bg-contact">
        <div class="row">
            <br>

            <div class="col-sm-12 col-md-3">
                <div class="contact-address">
                    <strong>Stichting OosterplasDOET!<br></strong>
                    <div class="infolist">
                        <dt><br>Adres:</dt>
                        <dd class="address">
                            <p translate="no" itemscope itemtype="http://schema.org/PostalAddress">
                                <span itemprop="streetAddress"> {{ $settings->address }} </span><br>
                                <span itemprop="postalCode"> {{ $settings->zipcode }} </span>
                            </p>
                        </dd>
                    </div>
                    <strong>RSIN nummer:</strong> {{ $settings->{'RSIN-number'} }}<br>
                    <strong>KvK nummer:</strong> {{ $settings->{'KvK-number'} }}<br>
                    <strong>SBI-code:</strong> {{ $settings->{'SBI-code'} }}<br>
                    <strong><br>Emailadres:</strong><br>{{ $settings->email }}<br><br>
                </div>
            </div>

            <div class="col-sm-12 col-md-5">
                <div class="googlemaps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4946.722532727519!2d5.336517429205033!3d51.689833718661944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6efa76de486a1%3A0xcf664914fbb72b1e!2sOosterplas!5e0!3m2!1snl!2snl!4v1496412342700"
                            class="googlemaps" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <a class="twitter-timeline" data-lang="nl" data-height="450" data-width="400"
                   href="https://twitter.com/OosterplasDoet"
                   data-chrome="nofooter">Tweets by OosterplasDoet</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <legend>Nieuwsbrief</legend>
                    </div>
                    <label class="col-md-6 control-label">Wilt u altijd als eerste de nieuwtjes weten over onze
                        website?</label>
                    <label class="col-md-6 control-label">Meld je hier dan aan voor onze nieuwsbrief!</label>
                    <br><br>
                    <div class="col-md-12">
                        {!! Form::open(array('id' => 'newsletter_form', 'method' => 'POST', 'action' => 'ContactController@post', 'class' => 'well form-horizontal')) !!}

                        <div class="form-group row">
                            {!! Form::label('news_email', 'Email') !!}
                            {!! Form::text('news_email', null, ['class' => 'form-control', 'required']) !!}
                        </div>

                        <input type="hidden" name="event" value="empty" id="event">

                        <div class="row">
                            {!! Form::submit('Meld je nu aan voor onze nieuwsbrief!', array('class' => 'btn btn-primary button-submit colored', 'id' => 'subscribe')) !!}
                            <br/><br/>
                            {!! Form::submit('Klik hier om je af te melden van onze nieuwsbrief', array('class' => 'btn btn-primary button-submit colored', 'id' => 'unsubscribe')) !!}
                        </div>

                        @if (session('message'))
                        <!-- Success message -->
                            <div class="alert alert-success" role="alert" id="success_message">Success <i
                                        class="glyphicon glyphicon-thumbs-up"></i> {{ session('message') }}
                            </div>
                        @endif

                        @if (session('error'))
                        <!-- Error message -->
                            <div class="alert alert-danger" role="alert" id="success_message">
                                {{ session('error') }}
                            </div>
                        @endif

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <fieldset class="row">
                    <!-- Form Name -->
                    <legend class="col-md-12">Neem vandaag nog contact op!</legend>
                    <div class="col-md-12">
                        {!! Form::open(array('id' => 'contact_form', 'method' => 'POST', 'action' => 'ContactController@post', 'class' => 'well form-horizontal')) !!}

                        <div>
                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Naam</label>
                                <div class="col-md-7 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="name" placeholder="Naam" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail</label>
                                <div class="col-md-7 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="email" placeholder="E-mailadres" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Telefoonnummer</label>
                                <div class="col-md-7 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="phone" placeholder="0612345678" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text area -->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Tekst</label>
                                <div class="col-md-7 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-pencil"></i></span>
                                        <textarea class="form-control" name="text" placeholder="Tekst"></textarea>
                                    </div>
                                </div>
                            </div>

                        @if (session('status'))
                            <!-- Success message -->
                                <div class="alert alert-success" role="alert" id="success_message">Success <i
                                            class="glyphicon glyphicon-thumbs-up"></i> {{ session('status') }}
                                </div>
                        @endif

                        <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    {!! Form::submit('Verzend reactie', array('class' => 'btn btn-primary colored', 'name' => 'createSubmit')) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </fieldset>
            </div>

            <div class="col-sm-12 col-md-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Foosterplasdoet&tabs=timeline&width=400&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
                        height="500" style="border:none;overflow:hidden;width:100%;" scrolling="no" frameborder="0"
                        allowTransparency="true">
                </iframe>
                <br><br>
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
                    name: {
                        validators: {
                            stringLength: {
                                min: 2,
                                message: 'Vul tenminste 2 karakters in'
                            },
                            notEmpty: {
                                message: 'Vul alstublieft uw naam in'
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
                    text: {
                        validators: {
                            stringLength: {
                                min: 10,
                                max: 200,
                                message: 'Vul tenminste 10 karakters en niet meer dan 200 in'
                            },
                            notEmpty: {
                                message: 'Vul alstublieft uw vraag/opmerking in'
                            }
                        }
                    }
                }
            });

            $('#newsletter_form').bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    news_email: {
                        validators: {
                            notEmpty: {
                                message: 'Vul alstublieft uw emailadres in'
                            },
                            emailAddress: {
                                message: 'Vul alstublieft een geldig emailadres in'
                            }
                        }
                    }
                }
            });
            $('#subscribe').on('click', function () {
                $('#event').val('subscribe');
            });
            $('#unsubscribe').on('click', function () {
                $('#event').val('unsubscribe');
            });
        })
    </script>
@endsection
