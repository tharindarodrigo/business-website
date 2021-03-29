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
                            <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                                <div class="col-md-12 text-center">
                                    <h1>Contact Us</h1>
                                    <p>Awsome Page Teaser Here</p>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <section class="no-top" data-bgimage="url(images/background/3.png) top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 offset-md-2 mb-sm-30">
                        <h3>Do you have any question?</h3>

                        <form name="contactForm" id="contact_form" class="form-border" method="post" action="{!! url('send-message') !!}}">
                            <div class="field-set">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required/>
                            </div>

                            <div class="field-set">
                                <input type="text" name="email" id="email" class="form-control"
                                       placeholder="Your Email" required/>
                            </div>

                            <div class="field-set">
                                <input type="text" name="phone" id="phone" class="form-control"
                                       placeholder="Your Phone"/>
                            </div>

                            <div class="field-set">
                                <textarea name="message" id="message" class="form-control"
                                          placeholder="Your Message" required></textarea>
                            </div>

                            <div class="spacer-half"></div>

                            <div id="submit">
                                <button type="submit" value="Submit Form" class="btn btn-custom">Submit</button>
                            </div>
                            <div id="mail_success" class="success">Your message has been sent successfully.</div>
                            <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                        </form>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="col-lg-8 offset-md-2 mb30">
                        <div class="row">
{{--                            <div class="col-md-6">--}}
{{--                                <div class="padding40 bg-color-2 text-light box-rounded">--}}
{{--                                    <h3>US Office</h3>--}}
{{--                                    <address class="s1">--}}
{{--                                        <span><i--}}
{{--                                                class="fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>--}}
{{--                                        <span><i class="fa fa-phone fa-lg"></i>+1 333 9296</span>--}}
{{--                                        <span><i class="fa fa-envelope-o fa-lg"></i><a--}}
{{--                                                href="mailto:contact@example.com">contact@example.com</a></span>--}}
{{--                                        <span><i class="fa fa-file-pdf-o fa-lg"></i><a--}}
{{--                                                href="#">Download Brochure</a></span>--}}
{{--                                    </address>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="col-md-6">
                                <div class="padding40 bg-color-3 text-light box-rounded">
                                    <h3>AU Office</h3>
                                    <address class="s1">
                                        <span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
                                        <span><i class="fa fa-phone fa-lg"></i>+61 426 901 718</span>
                                        <span><i class="fa fa-envelope-o fa-lg"></i><a
                                                href="mailto:contact@example.com">hello@althinect.com</a></span>
                                        <span><i class="fa fa-file-pdf-o fa-lg"></i><a
                                                href="#">Download Brochure</a></span>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </div>
@endsection
