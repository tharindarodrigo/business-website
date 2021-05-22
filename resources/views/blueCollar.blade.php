@extends('partials.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        {{-- section begin --}}
        <section id="subheader" data-bgimage="url(images/background/5.png)">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                                <div class="col-md-12 text-center">
                                    <h1>The Blue Collar App</h1>
                                    <p>Manage your Human Resources smartly</p>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- section close --}}

        <section class="no-top">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-6">
                        <h3>What is it?</h3>
                        BlueCollar is a human resource management system (HRMS) on a very
                        high level. BlueCollar manages everything from time tracking to business
                        intelligence. With smart features like True Location and Automatic Forced
                        Checkout BlueCollar offers a lot of features that can be used to seamlessly
                        handle your workforce. The BlueCollar application suite comes bundled with
                        two mobile applications (supervisor and employee) and a back-office web
                        application that acts as the single point of control.
                        <div class="spacer-30"></div>

                        <h3>How does it help you?</h3>
                        BlueCollar helps you to manage your employees efficiently. From employee tracking to smart
                        reports based on your employee activities, BlueCollar handles end to end employee management.

                    </div>

                    <div class="col-md-6">
                        <img src="images/misc/2.png" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="spacer-double"></div>

                {{--<div class="row">

                    <div class="col-md-12 text-center">
                        <h3>Benefits of Email Marketing</h3>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box-type-2 mb30" data-bgcolor="#B3CAFF">
                            <i class="fa fa-mixcloud"></i>
                            <h4>Segmentation</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box-type-2 bg-color text-light mb30">
                            <i class="fa fa-clock-o text-light"></i>
                            <h4>Loyality &amp; Trust</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box-type-2 bg-color-2 text-light mb30">
                            <i class="fa fa-headphones text-light"></i>
                            <h4>Top of Mind</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box-type-2 bg-color-3 text-light mb30">
                            <i class="fa fa-refresh text-light"></i>
                            <h4>Low Cost</h4>
                        </div>
                    </div>


                    <div class="spacer-double"></div>

                    <div class="col-md-12 text-center">
                        <h3>Email Marketing FAQ</h3>
                    </div>

                    <div class="col-md-6">
                        <div id="accordion-1" class="accordion accordion-style-1">

                            --}}{{-- Accordion item 1 --}}{{--
                            <div class="card">
                                <div id="heading-a1" class="card-header bg-white shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                                                         data-target="#collapse-a1"
                                                                         aria-expanded="false"
                                                                         aria-controls="collapse-a1"
                                                                         class="d-block position-relative text-dark collapsible-link py-2">How
                                            Email Marketing help your business?</a></h6>
                                </div>
                                <div id="collapse-a1" aria-labelledby="heading-a1" data-parent="#accordion-1"
                                     class="collapse">
                                    <div class="card-body p-4">
                                        <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                            3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>

                            --}}{{-- Accordion item 2 --}}{{--
                            <div class="card">
                                <div id="heading-a2" class="card-header bg-white shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                                                         data-target="#collapse-a2"
                                                                         aria-expanded="false"
                                                                         aria-controls="collapse-a2"
                                                                         class="d-block position-relative collapsed text-dark collapsible-link py-2">How
                                            much budget for Email Marketing?</a></h6>
                                </div>
                                <div id="collapse-a2" aria-labelledby="heading-a2" data-parent="#accordion-1"
                                     class="collapse">
                                    <div class="card-body p-4">
                                        <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                            3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>

                            --}}{{-- Accordion item 3 --}}{{--
                            <div class="card">
                                <div id="heading-a3" class="card-header bg-white shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                                                         data-target="#collapse-a3"
                                                                         aria-expanded="false"
                                                                         aria-controls="collapse-a3"
                                                                         class="d-block position-relative collapsed text-dark collapsible-link py-2">How
                                            effective Email Marketing strategy?</a></h6>
                                </div>
                                <div id="collapse-a3" aria-labelledby="heading-a3" data-parent="#accordion-1"
                                     class="collapse">
                                    <div class="card-body p-4">
                                        <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                            3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        --}}{{-- Accordion --}}{{--
                        <div id="accordion-2" class="accordion accordion-style-1">

                            --}}{{-- Accordion item 1 --}}{{--
                            <div class="card">
                                <div id="heading-b1" class="card-header bg-white shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                                                         data-target="#collapse-b1"
                                                                         aria-expanded="false"
                                                                         aria-controls="collapse-b1"
                                                                         class="d-block position-relative text-dark collapsible-link py-2">When
                                            is Email Marketing needed?</a></h6>
                                </div>
                                <div id="collapse-b1" aria-labelledby="heading-b1" data-parent="#accordion-2"
                                     class="collapse">
                                    <div class="card-body p-4">
                                        <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                            3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>

                            --}}{{-- Accordion item 2 --}}{{--
                            <div class="card">
                                <div id="heading-b2" class="card-header bg-white shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                                                         data-target="#collapse-b2"
                                                                         aria-expanded="false"
                                                                         aria-controls="collapse-b2"
                                                                         class="d-block position-relative collapsed text-dark collapsible-link py-2">How
                                            Email Marketing reach more customers?</a></h6>
                                </div>
                                <div id="collapse-b2" aria-labelledby="heading-b2" data-parent="#accordion-2"
                                     class="collapse">
                                    <div class="card-body p-4">
                                        <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                            3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>

                            --}}{{-- Accordion item 3 --}}{{--
                            <div class="card">
                                <div id="heading-b3" class="card-header bg-white shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                                                         data-target="#collapse-b3"
                                                                         aria-expanded="false"
                                                                         aria-controls="collapse-b3"
                                                                         class="d-block position-relative collapsed text-dark collapsible-link py-2">What
                                            advantages of Email Marketing?</a></h6>
                                </div>
                                <div id="collapse-b3" aria-labelledby="heading-b3" data-parent="#accordion-2"
                                     class="collapse">
                                    <div class="card-body p-4">
                                        <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                            3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>--}}


            </div>
        </section>


        @include('partials._contactNumber')

        {{--        <section id="section-fun-facts" class="pt40 pb40 text-light bg-color-3">--}}
        {{--            <div class="container">--}}

        {{--                <div class="row">--}}
        {{--                    <div class="col-md-3 col-sm-6">--}}
        {{--                        <div class="de_count">--}}
        {{--                            <h3 class="timer" data-to="15425" data-speed="3000">0</h3>--}}
        {{--                            <span>Website Powered</span>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <div class="col-md-3 col-sm-6">--}}
        {{--                        <div class="de_count">--}}
        {{--                            <h3 class="timer" data-to="8745" data-speed="3000">0</h3>--}}
        {{--                            <span>Clients Supported</span>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <div class="col-md-3 col-sm-6" data-wow-delay=".5s">--}}
        {{--                        <div class="de_count">--}}
        {{--                            <h3 class="timer" data-to="235" data-speed="3000">0</h3>--}}
        {{--                            <span>Awards Winning</span>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <div class="col-md-3 col-sm-6">--}}
        {{--                        <div class="de_count">--}}
        {{--                            <h3 class="timer" data-to="15" data-speed="3000">0</h3>--}}
        {{--                            <span>Years Experience</span>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--            </div>--}}
        {{--        </section>--}}

    </div>
@endsection
