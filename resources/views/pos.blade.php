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
                                    <h1>Point of Sales System</h1>
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
                        A point of sale system, or POS, is the place where your customer makes a payment for products or
                        services at your store. Simply put, every time a customer makes a purchase at your store,
                        they’re completing a point of sale transaction.
                        The POS serves as the central component for your business; it’s the hub where everything—like
                        sales, inventory and customer management—merges.
                        <div class="spacer-30"></div>

                        <h3>How does it help you?</h3>
                        If you are running a retail business you will be able to manage
                        <div class="row">
                            <div class="col-m-6 mr-5">
                                <ul>
                                    <li>Inventory</li>
                                    <li>Batches</li>
                                    <li>Sales</li>
                                    <li>Payments</li>
                                    <li>Expenses</li>

                                </ul>
                            </div>
                            <div class="col-m-6">
                                <ul>
                                    <li>Stores</li>
                                    <li>Employees</li>
                                    <li>Estimates</li>
                                    <li>Orders</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <img src="images/misc/2.png" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="spacer-double"></div>


            </div>
        </section>

        @include('partials._contactNumber')

    </div>
@endsection
