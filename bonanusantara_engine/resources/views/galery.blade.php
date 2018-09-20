<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 19/07/2018
 * Time: 10.52
 */
?>
@extends('layouts.master')
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
@include('include.header_page')
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Gallery</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
</body>
@section('content')

    
    <div class="portfolio-wrap">
        <div class="container">
            <div class="row portfolio-container">
                <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g1.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g2.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g3.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g4.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-48 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g5.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-48 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g6.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g7.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mt-72 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g8.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/g9.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Loading Area</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship1.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship2.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship3.jpg') }}" alt=""></a>

                       <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship4.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-48 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship5.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-48 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship6.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship7.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mt-72 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship8.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="{{ asset('carries/img/galery/ship9.jpg') }}" alt=""></a>

                        <h3 class="entry-title"><a href="#">Warehouse</a></h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-72">
                    <a href="#" class="btn gradient-bg load-more-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>
@stop
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