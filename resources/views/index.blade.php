@extends('partials.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section data-bgimage="url(images/background/1.png) bottom" class="full-height vertical-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                        <h4>Whatever business you do</h4>
                        <div class="spacer-10"></div>
                        <h1>bluetec is what your <span class="id-color">business</span> need</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim.</p>
                        <div class="spacer-20"></div>
                        <a class="btn-custom" href="#">Learn More</a>
                        <div class="mb-sm-30"></div>
                    </div>

                    <div class="col-lg-6 offset-lg-1 wow fadeInLeft" data-wow-delay=".5s">
                        <img src="images/misc/1.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section id="section-highlight" data-bgimage="url(images/background/2.png) top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="text-center">
                            <h2><span class="uptitle id-color">Our Services</span>How does it work?</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- feature box begin -->
                    <div class="col-lg-4 col-md-6 mb40 wow fadeInUp" data-wow-delay="0s">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa fa-wordpress"></i>
                            <div class="text">
                                <a href="service-single.html"><h4>Website Design</h4></a>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                            </div>
                            <i class="wm fa fa-wordpress"></i>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color-2 i-circle fa fa-paper-plane-o"></i>
                            <div class="text">
                                <a href="service-single.html"><h4>Email Marketing</h4></a>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                            </div>
                            <i class="wm fa fa-paper-plane-o"></i>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color-3 i-circle fa fa-line-chart"></i>
                            <div class="text">
                                <a href="service-single.html"><h4>Digital Analytics</h4></a>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                            </div>
                            <i class="wm i-circle fa fa-line-chart"></i>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <div class="col-md-12 text-center">
                        <a class="btn-custom" href="#">More Features</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-banner" class="no-top" data-bgimage="url(images/background/3.png) top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight" data-wow-delay="0s">
                        <img class="relative img-fluid" src="images/misc/5.png" alt="" />
                    </div>

                    <div class="col-lg-5 offset-md-1 wow fadeInLeft" data-wow-delay="0s">
                        <h2>
                            Data security with<br />
                            <span class="id-color">256-bit</span> encryption
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .
                        </p>
                        <div class="spacer-half"></div>
                        <a class="btn-custom" href="#">Get Started</a>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                        <div id="owl-logo" class="logo-carousel owl-carousel owl-theme">
                            <img src="images/logo-clients/1.png" class="img-fluid" alt="" />
                            <img src="images/logo-clients/2.png" class="img-fluid" alt="" />
                            <img src="images/logo-clients/3.png" class="img-fluid" alt="" />
                            <img src="images/logo-clients/4.png" class="img-fluid" alt="" />
                            <img src="images/logo-clients/5.png" class="img-fluid" alt="" />
                            <img src="images/logo-clients/6.png" class="img-fluid" alt="" />
                            <img src="images/logo-clients/7.png" class="img-fluid" alt="" />
                            <img src="images/logo-clients/8.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-testimonial" data-bgimage="url(images/background/2.png)  top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2><span class="uptitle id-color">Testimonial</span>What They Says</h2>
                            <div class="spacer-20"></div>
                        </div>
                        <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/1.jpg" /> <span>John, Pixar Studio</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/2.jpg" /> <span>Sarah, Microsoft</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/3.jpg" /> <span>Michael, Apple</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/4.jpg" /> <span>Thomas, Samsung</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/1.jpg" /> <span>John, Pixar Studio</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/2.jpg" /> <span>Sarah, Microsoft</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/3.jpg" /> <span>Michael, Apple</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by"><img alt="" class="rounded-circle" src="images/people/4.jpg" /> <span>Thomas, Samsung</span></div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-fun-facts" class="pt60 pb60 text-light bg-color-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0s">
                        <div class="de_count">
                            <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                            <span>Website Powered</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                        <div class="de_count">
                            <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                            <span>Clients Supported</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="de_count">
                            <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                            <span>Awards Winning</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".75s">
                        <div class="de_count">
                            <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                            <span>Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
