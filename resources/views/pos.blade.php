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
                                    <h1>Enterprise Resource Planning</h1>
                                    <p>Increase your sales. Get ahead of your competition</p>
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

                    <div class="col-md-6">
                        <h3>What is a POS?</h3>

                    </div>

                    <div class="col-md-6">
                        <img src="images/misc/2.png" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="spacer-double"></div>


            </div>
        </section>

        @include('')

    </div>
@endsection
