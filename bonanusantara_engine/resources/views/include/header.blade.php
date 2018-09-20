<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 12/07/2018
 * Time: 16.15
 */
?>
<!-- <header class="top-area" id="home">
    <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="header-top-area">
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#home" class="navbar-brand"></a>
                    </div>

                    <div id="main-nav" class="stellarnav">
                        <ul id="nav" class="nav navbar-nav">
                            <li>
                                <a href="{{ url('/') }}"><strong>Home</strong></a>
                            </li>
                            <li>
                                <a href="{{ route('layanan') }}"><strong>Services</strong></a>
                            </li>
                            <li>
                                <a href="{{ route('klien') }}"><strong>Client</strong></a>
                            </li>
                            <li>
                                <a href="{{ route('testimonial') }}"><strong>Testimonial</strong></a>
                            </li>
                            <li>
                                <a href="{{ route('galery') }}"><strong>Gallery</strong></a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}"><strong>Contact Us</strong></a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"><strong>About Us</strong></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
</header> -->
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
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('layanan') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('klien') }}">Client</a>
                            </li>
                            <li>
                                <a href="{{ route('testimonial') }}">Testimonial</a>
                            </li>
                            <li>
                                <a href="{{ route('galery') }}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">Contact Us</a>
                            </li>
                            <li>
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

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="{{ asset('bona/images/header1.jpg') }}" alt="">

                
            </div><!-- .hero-content-wrap -->

            

            
        </div><!-- .swiper-wrapper -->

        

        
    </div><!-- .hero-slider -->
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

@stop