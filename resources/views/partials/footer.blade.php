<footer class="footer-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <a href="{!! url('/') !!}"><img alt="" class="logo" src="{!! asset('images/logo.png') !!}" height="100"></a>
{{--                    <div class="spacer-20"></div>--}}
{{--                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>--}}
                </div>
            </div>

            <div class="col-lg-2">
                <div class="widget">
{{--                    <h5>Demo</h5>--}}
{{--                    <ul>--}}
{{--                        <li><a href="index.html">Saas</a></li>--}}
{{--                        <li><a href="index-startup.html">Startup</a></li>--}}
{{--                        <li><a href="index-coworking.html">Co-working</a></li>--}}
{{--                        <li><a href="index-agency.html">Agency</a></li>--}}
{{--                        <li><a href="index-apps.html">Apps</a></li>--}}
{{--                        <li><a href="service-single.html">Email Marketing</a></li>--}}
{{--                        <li><a href="pricing-plans.html">Pricing Plan</a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>

            <div class="col-lg-2">
                <div class="widget">
                    <h5>Pages</h5>
                    <ul>
                        <li><a href="about">About Us</a></li>
{{--                        <li><a href="our-team.html">Our Team</a></li>--}}
{{--                        <li><a href="our-history.html">Our History</a></li>--}}
                        <li><a href="#">FAQs</a></li>
                        <li><a href="{!! url('pos') !!}">POS</a></li>
                        <li><a href="{!! url('services') !!}">Services</a></li>
                        <li><a href="{!! url('contact') !!}">Contact Us</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="widget">
                    <h5>Newsletter</h5>

                    <p>Signup for our newsletter to get the latest news, updates and special offers in your inbox.</p>
                    <form action="{!! url('newsletter-signup') !!}" class="row" id="form_subscribe" method="post" name="form_subscribe">
                        <div class="col text-center">
                            <input class="form-control" id="name_1" name="name_1" placeholder="enter your email" type="text" /> <a href="#" id="btn-submit"><i class="arrow_right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div class="spacer-10"></div>
                    <small>Your email is safe with us. We don't spam.</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 sm-text-center mb-sm-30">
                <div class="mt10">&copy; Copyright {!! date('Y') !!} - Althinect</div>
            </div>

            <div class="col-md-6 text-md-right text-sm-left">
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
{{--                    <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>--}}
{{--                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>--}}
{{--                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
