@extends('components.home.mainLayout')
@section('content')
    @include('components.layout.contact.header')

    <div id="page_wrapper" class="wrapper">
        <div class="p-relative contact-form over-hidden section-padding">
            <div class="dsn-mask p-absolute w-70 left-0 top-0 h-100 background-section"></div>
            <div class="p-relative container d-grid grid-1-half" data-dsn-gap="30px 60px">
                <div class="box-form">
                    <h2 class="title-h2 ">
                        IF YOU HAVE QUESTIONS PLEASE <br>CONTACT US
                    </h2>
                    <p class="mt-10">Fill fields and find approximate your repair</p>
                    <div class="dsn-form mt-20 form-box d-flex flex-column">
                        @include('emailView')
                    </div>
                </div>
                <div class="box-info p-30 background-theme ">
                    <div class="icon-left dsn-icon-heading-color d-flex align-items-center h-100">
                        <div class="d-grid dsn-service icon-left align-items-center">
                            <div class="service-item p-relative grid-item style-box  background-transparent">
                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-map-marker-alt"
                                            aria-hidden="true"></i></div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  sm-title-block ">Location:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p>Anuradhapura
                                                <br>Sri Lanka</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i>
                                    </div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  sm-title-block ">
                                            Phones:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p>+94 945 8554 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  sm-title-block ">
                                            Email:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p>contact@thamoddya.cloud</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('components.layout.footer')
@endsection
