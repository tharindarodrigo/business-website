<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>Althinect Software</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Althinect Saas Software" name="keywords" />
    <meta content="althinect" name="keywords" />
    <meta content="software australia" name="keywords" />
    <meta content="melbourne" name="keywords" />
    <meta content="bluecollar" name="keywords" />
    <meta content="human resource" name="keywords" />
    <meta content="" name="author" />

    <!--[if lt IE 9]>
    <script src="{!! asset("js/html5shiv.js") !!}"></script>
    <![endif]-->

    {{-- CSS Files
================================================== --}}
    <link href="{!! asset(" css/bootstrap.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/bootstrap-grid.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/bootstrap-reboot.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/animate.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/owl.carousel.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/owl.theme.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/owl.transitions.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/magnific-popup.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/jquery.countdown.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset(" css/style.css") !!}" rel="stylesheet" type="text/css" />

    {{-- color scheme --}}
    <link id="colors" href="{!! asset('css/colors/scheme-01.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/coloring.css') !!}" rel="stylesheet" type="text/css" />


</head>

<body>
    <div id="wrapper">
        {{-- header begin --}}
        @include('partials.header')
        {{-- header close --}}
        {{-- content begin --}}
        @yield('content')
        {{-- content close --}}

        {{-- footer begin --}}
        @include('partials.footer')
        {{-- footer close --}}

        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    {{-- Javascript Files
================================================== --}}
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/wow.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.isotope.min.js') !!}"></script>
    <script src="{!! asset('js/easing.js') !!}"></script>
    <script src="{!! asset('js/owl.carousel.js') !!}"></script>
    <script src="{!! asset('js/validation.js') !!}"></script>
    <script src="{!! asset('js/jquery.magnific-popup.min.js') !!}"></script>
    <script src="{!! asset('js/enquire.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.stellar.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.plugin.js') !!}"></script>
    <script src="{!! asset('js/typed.js') !!}"></script>
    <script src="{!! asset('js/jquery.countTo.js') !!}"></script>
    <script src="{!! asset('js/jquery.countdown.js') !!}"></script>
    <script src="{!! asset('js/designesia.js') !!}"></script>


</body>

</html>