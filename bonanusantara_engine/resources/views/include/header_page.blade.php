@section('header')
    <link rel="stylesheet" href="{{ asset('bona/css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('bona/css/font-awesome.min.css') }}">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{ asset('bona/css/elegant-fonts.css') }}">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{ asset('bona/css/themify-icons.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('bona/css/swiper.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bona/style.css') }}">

@stop
<body class="single-page about-page">
<header class="site-header">
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="#home" rel="home"><img class="d-block" src="{{ asset('bona/images/logo_bona2.png') }}" alt="logo"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li {{ (Request::is('home') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li {{ (Request::is('layanan') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ route('layanan') }}">Services</a>
                            </li>
                            <li {{ (Request::is('klien') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ route('klien') }}">Client</a>
                            </li>
                            <li {{ (Request::is('testimonial') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ route('testimonial') }}">Testimonial</a>
                            </li>
                            <li {{ (Request::is('galery') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ route('galery') }}">Gallery</a>
                            </li>
                            <li {{ (Request::is('contact') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ url('contact') }}">Contact Us</a>
                            </li>

                            <li {{ (Request::is('about') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                        </ul>
                    </nav><!-- .site-navigation -->

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
</header><!-- .site-header -->

@section('script')
    <script type='text/javascript' src="{{ asset('bona/js/jquery.js')}}"></script>
    <script type='text/javascript' src="{{ asset('bona/js/jquery.collapsible.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('bona/js/swiper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('bona/js/jquery.countdown.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('bona/js/circle-progress.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('bona/js/jquery.countTo.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('bona/js/jquery.barfiller.js') }}"></script>
    <script type='text/javascript' src="{{ asset('bona/js/custom.js') }}"></script>
    <script src="{{ asset('carries/js/vendor/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('carries/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('carries/js/main.js') }}"></script>
@stop