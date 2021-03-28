@extends('partials.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form class="row" id='form_subscribe' method="post" name="myForm">
                                <div class="col-md-12 text-center">
                                    <h1>Our Services</h1>
                                    <p>Our expertise will help you boost your business</p>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section class="no-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa fa-briefcase"></i>
                            <div class="text">
                                <h4>Business Analysis</h4>
                                {{--                                Most Clients who come to us  what their requirements are--}}
                                Our experienced Business Analysts will help you to identify you pain points and gather
                                system requirements for you.
                            </div>
                            <i class="wm fa fa-briefcase"></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa fa-paint-brush"></i>
                            <div class="text">
                                <h4>UI/UX</h4>
                                Our UI/UX designers will guarantee seamless experience in the systems we build which
                                will help your clients stay bound with your business
                            </div>
                            <i class="wm fa fa-paint-brush"></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa fa-laptop"></i>
                            <div class="text">
                                <h4>Web Development</h4>
                                We are a highly skilled development team. We provide solutions from static websites to
                                Dynamic web based ERP systems
                            </div>
                            <i class="wm fa fa-laptop"></i>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa fa-globe"></i>
                            <div class="text">
                                <h4>IoT</h4>
                                We provide a range of solutions from Designing device Circuitry to Monitoring,
                                Controlling and Data Analytics.
                            </div>
                            <i class="wm fa fa-globe"></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa fa-cloud"></i>
                            <div class="text">
                                <h4>Cloud Solutions</h4>
                                Our cloud experts can provide solutions based on all major service providers such as
                                AWS, GCP and Microsoft AZURE
                            </div>
                            <i class="wm fa fa-cloud"></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa 	fa-comments-o"></i>
                            <div class="text">
                                <h4>IT Consultancy</h4>
                                We can help you from your Logo design, website and email setup to automating your managing your
                                employees and automating business
                            </div>
                            <i class="wm fa fa-comments-o"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{--        <section data-bgimage="url(images/background/7.png) center">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <h2><span class="id-color">Call us</span> for further information. Bluetec customer care is here--}}
{{--                            to help you <span class="id-color">anytime</span>. </h2>--}}
{{--                        <p class="lead">We're available for 24 hours!</p>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-6 text-lg-center text-sm-center">--}}
{{--                        <div class="phone-num-big">--}}
{{--                            <i class="fa fa-phone id-color"></i>--}}
{{--                            <span class="pnb-text">--}}
{{--									Call Us Now--}}
{{--								</span>--}}
{{--                            <span class="pnb-num">--}}
{{--									1 200 333 800--}}
{{--								</span>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="btn-custom capsule med">Contact Us</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

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
