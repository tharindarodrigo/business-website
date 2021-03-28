<header class="header-light transparent scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="align-self-center header-col-left">
                        {{-- logo begin --}}
                        {{-- logo begin --}}
                        <div id="logo">
                            <a href="{!! url('/') !!}">
                                <img alt="" src="images/logo-1.png" />
                            </a>
                        </div>
                        {{-- logo close --}}
                        {{-- logo close --}}
                    </div>
                    <div class="align-self-center ml-auto header-col-mid">
                        {{-- mainmenu begin --}}
                        <ul id="mainmenu">
                            <li>
                                <a href="{!! url('/') !!}">Home</a>
                            </li>
                            <li>
                                <a href="{!! url('about') !!}">About Us</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
                                <ul>
                                    <li><a href="{!! url('pos') !!}">ERP</a></li>
                                    <li><a href="{!! url('pos') !!}">POS</a></li>
                                    <li><a href="{!! url('pos') !!}">Custom Services</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{!! url('services') !!}">Portfolio</a>
{{--                                <ul>--}}
{{--                                    <li><a href="{!! url('pos') !!}">ERP</a></li>--}}
{{--                                    <li><a href="{!! url('pos') !!}">POS</a></li>--}}
{{--                                    <li><a href="{!! url('pos') !!}">Custom Services</a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li>
                                <a href="{!! url('contact') !!}">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                    <div class="align-self-center ml-auto header-col-right">
                        <a class="btn-custom" href="#"><i class="fa fa-arrow-down"></i> Buy Now</a>
                        <span id="menu-btn"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</header>
