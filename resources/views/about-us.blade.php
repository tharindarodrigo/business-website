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
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>About Us</h1>
{{--                                <p>Awsome Page Teaser Here</p>--}}
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section class="no-top" data-bgimage="url(images/background/6.png) center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 ">
                    <img src="images/misc/1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 offset-md-1">
                    <p>Althinect Solutions is a global technology solution company that helps enterprises reimagine their businesses for the future. Our Solutions and services are built on innovation, with decades of industry experience. Althinect Solutions delivery capabilities deliver holistic services across industry verticals to leading enterprises across multiple geographies.</p>
                    <p>Enterprises across globe embracing a digital influx today. In order to thrive in the digital influx, technologies such as analytics, cloud, IoT, and automation have come to the forefront. In order to offer enterprises’, the benefit of these technologies to further their business objectives, Althinect offers an integrated portfolio of products and services through several platforms.</p>
                </div>
            </div>

            <div class="spacer-double"></div>

{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <h3>Team Of Awesome</h3>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30">--}}
{{--                    <div class="f-profile text-center">--}}
{{--                        <div class="fp-wrap gray">--}}
{{--                            <div class="fpw-overlay">--}}
{{--                                <div class="fpwo-wrap">--}}
{{--                                    <div class="fpwow-icons">--}}
{{--                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="fpw-overlay-btm"></div>--}}
{{--                            <img src="images/team/1.jpg" class="fp-image img-fluid" alt="">--}}
{{--                        </div>--}}

{{--                        <h4>Fynley Wilkinson</h4>--}}
{{--                        Chief Creative Officer--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30">--}}
{{--                    <div class="f-profile text-center">--}}
{{--                        <div class="fp-wrap gray">--}}
{{--                            <div class="fpw-overlay">--}}
{{--                                <div class="fpwo-wrap">--}}
{{--                                    <div class="fpwow-icons">--}}
{{--                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="fpw-overlay-btm"></div>--}}
{{--                            <img src="images/team/2.jpg" class="fp-image img-fluid" alt="">--}}
{{--                        </div>--}}

{{--                        <h4>Myra Welsh</h4>--}}
{{--                        Chief Technology Officer--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30">--}}
{{--                    <div class="f-profile text-center">--}}
{{--                        <div class="fp-wrap gray">--}}
{{--                            <div class="fpw-overlay">--}}
{{--                                <div class="fpwo-wrap">--}}
{{--                                    <div class="fpwow-icons">--}}
{{--                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="fpw-overlay-btm"></div>--}}
{{--                            <img src="images/team/3.jpg" class="fp-image img-fluid" alt="">--}}
{{--                        </div>--}}

{{--                        <h4>Aysha Shepard</h4>--}}
{{--                        Chief Executive Officer--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30">--}}
{{--                    <div class="f-profile text-center">--}}
{{--                        <div class="fp-wrap gray">--}}
{{--                            <div class="fpw-overlay">--}}
{{--                                <div class="fpwo-wrap">--}}
{{--                                    <div class="fpwow-icons">--}}
{{--                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>--}}
{{--                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="fpw-overlay-btm"></div>--}}
{{--                            <img src="images/team/4.jpg" class="fp-image img-fluid" alt="">--}}
{{--                        </div>--}}

{{--                        <h4>Robyn Peel</h4>--}}
{{--                        Director of Finance--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}

            <div class="spacer-double"></div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>What makes us different?</h3>
                    <p>At Althinect we use disruptive technologies to help businesses be more productive, creative and consistent. While some may see technology as a threat</p>
                    <p>We see possibilities. At Althinect we offer a range of services to help you achieve more by being productive, imaginative and at the same time consistent with growing your business.</p>
                </div>

                <div class="col-md-5  offset-md-1">
                    <img src="images/misc/5.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="spacer-double"></div>

{{--            <div class="padding40 round" data-bgcolor="#f5f5f5">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-md-2">--}}
{{--                        <h4 class="no-bottom">Our Clients</h4>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-10">--}}
{{--                        <div id="owl-logo" class="logo-carousel owl-carousel owl-theme">--}}
{{--                            <img src="images/logo-clients/1.png" class="img-fluid" alt="">--}}
{{--                            <img src="images/logo-clients/2.png" class="img-fluid" alt="">--}}
{{--                            <img src="images/logo-clients/3.png" class="img-fluid" alt="">--}}
{{--                            <img src="images/logo-clients/4.png" class="img-fluid" alt="">--}}
{{--                            <img src="images/logo-clients/5.png" class="img-fluid" alt="">--}}
{{--                            <img src="images/logo-clients/6.png" class="img-fluid" alt="">--}}
{{--                            <img src="images/logo-clients/7.png" class="img-fluid" alt="">--}}
{{--                            <img src="images/logo-clients/8.png" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

    </section>

{{--    <section class="pt60 pb60 bg-color-2 text-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">--}}
{{--                    <h3 class="no-bottom">Awesomeness begin here. Are you ready?</h3>--}}
{{--                </div>--}}

{{--                <div class="col-md-4 text-lg-right text-sm-center">--}}
{{--                    <a href="#" class="btn-custom capsule med">Let's do it!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

</div>
@endsection
