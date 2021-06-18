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
                                    <h1>Feedback App</h1>
                                    <p>Get to know your customers expectations</p>
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
                        <h3>The Feedback App</h3>
                        FeedBack App is a software that can be used to get feedback from your customers. The importance
                        of collecting feedback is not in collecting but in
                        interpreting and drawing conclusions from the received feedback. FeedBack
                        really stands out in reporting and analysing feedback. FeedBack makes the
                        process of collecting and analysing feedback a breeze. This will help you to
                        know your customer bette
                        <div class="spacer-30"></div>

                        <h3>How does it help you?</h3>
                        FeedBack can give you valuable insights of your customer who is at core of your business. By
                        analysing customer insights and feedback you can change business processes to make your customer
                        happier

                    </div>

                    <div class="col-md-6">
                        <img src="images/misc/feedback.svg" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="spacer-double"></div>


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
